---
title: Coldcard Bug - Bitcoin being stolen by AI attacker
taxonomy:
    tags: [Blog, Security, Wallets, Learn Bitcoin]
routes:
    default: '/coldcard-exploit'
date: 2026-08-01 18:40
dateformat: 'Y-m-d H:i'
summary: Bitcoin itself is safe - only Coldcard affected
thumbnail: _Anita--Show-Cover-700.png
template: article
---

# Coldcard Bug - Bitcoin being stolen by AI attacker
​
Starting July 30th, 2026 users reported that their Bitcoin were being drained from their Coldcard wallets. I sent out this emergency email to my newsletter subscribers:

This is **not a bug in Bitcoin**! Bitcoin is secure, it is a manufacturers software that had the problem.

​
The manufacturers of the **Bitbox02, Trezor, Seedsigner, Jade, Bitkey, Foundation** all reported that their devices **are not affected!**
​

It turned out that there was a bug in the Coldcard firmware from 2021. If you created a seed back then, the Coldcard did not calculate the seed words as secure as it should. Someone found that bug with the help of AI and started to exploit it by guessing seed words and then stealing bitcoin by moving them to their own address.  
​

**If you own a Coldcard you should move your funds as soon as possible. Especially when you don’t have an additional passphrase (this is not the device PIN).​**

What all Coldcard users should do:

- purchase a different hardware device, the manufacturers of the Bitbox02, Trezor, Seedsigner, Jade, Bitkey, Foundation all reported that they are not affected.
- Create a new seed on that device and add a passphrase (write down the seed words on paper, do not store them on a digital device; the passphrase can be stored in a password manager, best is to store it on paper too in a separate location (not together with the seed!) Remember: you will need the passphrase to access your wallet! Without it you will not be able to move your money - even if you have the seed)
- then test the new wallet, seed and passphrase by
- sending a small amount as a test to your new wallet
- after receiving the test amount wipe your new device (reset) and then import the new seed and enter the passphrase when the device asks you to.
- you will have access to your new wallet and can be sure, that the device works and you have the correct seed and passphrase
- now move the rest of your funds from the Coldcard to the new device
- do it in steps, if you feel insecure doing a high value transaction at once


If you don’t have a different device at hand and you want to secure your funds fast then send them temporarily to a hot wallet until you receive a new hardware device.  
- install Blue Wallet on your phone or Sparrow wallet on your computer
- create a new seed with the wallet
- add a passphrase
- follow the steps from above

If you had your coins on an exchange before you moved them to the Coldcard, you KYCed yourself already back then, meaning you could move the coins back to the exchange temporarily.

I do not recommend setting up a multi-signature wallet in a hurry. Although it offers more security than a single-sig it is not easy to set up and you need to practice it before you move funds into it.  
​

**As an affected Coldcard user please do your own research on that topic!** I am on vacation right now and wanted to send out this information fast!

​
Here are videos of what happened and tutorials:
​[https://www.youtube.com/watch?v=_ld5oX1LKas](https://www.youtube.com/watch?v=_ld5oX1LKas)​

​[https://www.youtube.com/watch?v=rf-9rf93OpE](https://www.youtube.com/watch?v=rf-9rf93OpE)​

Here is Coldcard's statement:
​[https://blog.coinkite.com/coldcard-mk3-seed-generation-warning/](https://blog.coinkite.com/coldcard-mk3-seed-generation-warning/)​  
​  
Stay safe!