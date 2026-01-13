#!/usr/bin/env php
<?php

/**
 * Script to find and rename files containing "posch" (case-insensitive) 
 * by removing "Posch" from the filename.
 * 
 * Usage: php rename_posch_files.php [options]
 * 
 * Options:
 *   --extensions=<ext1,ext2>    Comma-separated list of file extensions (e.g., md,png,jpg,jpeg)
 *   --dry-run                  Show what would be renamed without actually renaming
 *   --log-file=<path>          Custom log file path (default: rename_posch_files.log)
 *   --help                     Show this help message
 */

class PoschFileRenamer {
    private $logFile;
    private $dryRun = false;
    private $allowedExtensions = [];
    private $renamedCount = 0;
    private $skippedCount = 0;
    
    public function __construct() {
        $this->logFile = __DIR__ . '/rename_posch_files.log';
    }
    
    public function run($argv) {
        $this->parseArguments($argv);
        
        if (in_array('--help', $argv)) {
            $this->showHelp();
            return;
        }
        
        $this->log("=== Posch File Renamer Started ===");
        $this->log("Date: " . date('Y-m-d H:i:s'));
        $this->log("Mode: " . ($this->dryRun ? "DRY RUN" : "LIVE"));
        
        if (!empty($this->allowedExtensions)) {
            $this->log("Extensions filter: " . implode(', ', $this->allowedExtensions));
        }
        
        $userDir = __DIR__ . '/user';
        
        if (!is_dir($userDir)) {
            $this->log("ERROR: /user directory not found at: $userDir");
            return;
        }
        
        $this->processDirectory($userDir);
        
        $this->log("=== Summary ===");
        $this->log("Files processed: " . $this->renamedCount);
        $this->log("Files skipped: " . $this->skippedCount);
        $this->log("=== Posch File Renamer Finished ===");
        
        echo "\nOperation completed!\n";
        echo "Files processed: {$this->renamedCount}\n";
        echo "Files skipped: {$this->skippedCount}\n";
        echo "Log file: {$this->logFile}\n";
    }
    
    private function parseArguments($argv) {
        foreach ($argv as $arg) {
            if (strpos($arg, '--extensions=') === 0) {
                $extensions = substr($arg, 13);
                $this->allowedExtensions = array_map('trim', explode(',', $extensions));
                $this->allowedExtensions = array_filter($this->allowedExtensions);
            } elseif ($arg === '--dry-run') {
                $this->dryRun = true;
            } elseif (strpos($arg, '--log-file=') === 0) {
                $this->logFile = substr($arg, 11);
            }
        }
    }
    
    private function showHelp() {
        echo "Posch File Renamer\n";
        echo "==================\n\n";
        echo "Finds and renames files containing 'posch' (case-insensitive) by removing 'Posch' from the filename.\n\n";
        echo "Usage: php rename_posch_files.php [options]\n\n";
        echo "Options:\n";
        echo "  --extensions=<ext1,ext2>    Comma-separated list of file extensions (e.g., md,png,jpg,jpeg)\n";
        echo "  --dry-run                  Show what would be renamed without actually renaming\n";
        echo "  --log-file=<path>          Custom log file path (default: rename_posch_files.log)\n";
        echo "  --help                     Show this help message\n\n";
        echo "Examples:\n";
        echo "  php rename_posch_files.php                                    # Process all files\n";
        echo "  php rename_posch_files.php --extensions=md,png,jpg           # Process only .md, .png, .jpg files\n";
        echo "  php rename_posch_files.php --dry-run                         # Preview changes without renaming\n";
        echo "  php rename_posch_files.php --extensions=md --dry-run         # Preview changes for .md files only\n";
    }
    
    private function processDirectory($dir) {
        $items = scandir($dir);
        
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') {
                continue;
            }
            
            $path = $dir . '/' . $item;
            
            if (is_dir($path)) {
                $this->processDirectory($path);
            } elseif (is_file($path)) {
                $this->processFile($path);
            }
        }
    }
    
    private function processFile($filePath) {
        $fileName = basename($filePath);
        $dirName = dirname($filePath);
        
        // Check if filename contains "posch" (case-insensitive)
        if (!preg_match('/posch/i', $fileName)) {
            return;
        }
        
        // Check extension filter
        if (!empty($this->allowedExtensions)) {
            $extension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            if (!in_array($extension, $this->allowedExtensions)) {
                $this->log("SKIPPED (extension filter): $filePath");
                $this->skippedCount++;
                return;
            }
        }
        
        // Remove "Posch" (case-insensitive) from filename
        $newFileName = preg_replace('/posch/i', '', $fileName);
        $newFileName = preg_replace('/\s+/', ' ', $newFileName); // Clean up multiple spaces
        $newFileName = trim($newFileName);
        
        // Ensure we don't end up with empty filename
        if (empty($newFileName) || $newFileName === '.') {
            $this->log("ERROR: Cannot rename '$fileName' - would result in empty filename");
            $this->skippedCount++;
            return;
        }
        
        $newFilePath = $dirName . '/' . $newFileName;
        
        // Check if new filename already exists
        if (file_exists($newFilePath) && $newFilePath !== $filePath) {
            $this->log("SKIPPED (target exists): $filePath -> $newFilePath");
            $this->skippedCount++;
            return;
        }
        
        // Log the action
        $action = $this->dryRun ? "WOULD RENAME" : "RENAMED";
        $this->log("$action: $filePath -> $newFilePath");
        
        // Perform the rename if not in dry-run mode
        if (!$this->dryRun) {
            if (rename($filePath, $newFilePath)) {
                $this->renamedCount++;
                echo "Renamed: $fileName -> $newFileName\n";
            } else {
                $this->log("ERROR: Failed to rename $filePath");
                $this->skippedCount++;
            }
        } else {
            $this->renamedCount++;
            echo "[DRY RUN] Would rename: $fileName -> $newFileName\n";
        }
    }
    
    private function log($message) {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message\n";
        
        // Write to log file
        file_put_contents($this->logFile, $logMessage, FILE_APPEND | LOCK_EX);
        
        // Also output to console
        echo $logMessage;
    }
}

// Run the script
$renamer = new PoschFileRenamer();
$renamer->run($argv);
