---
title: Aqua, Misty Breez, Bull Bitcoin and other wallets - Money temporarily unspendable
taxonomy:
    tags: [Blog, Security, Wallets, Learn Bitcoin]
routes:
    default: '/boltz-disabled'
date: 2026-08-04 18:40
dateformat: 'Y-m-d H:i'
summary: Your funds are secure, only Lightning payments and swaps are stuck. Here is what the error means and what to do while Boltz stays offline.
thumbnail: boltz-paused.png
template: article
---

# Aqua, Misty Breez, Bull Bitcoin and other wallets - Money temporarily unspendable - what to do now

You open Aqua, Misty Breez or Bull Bitcoin to pay an invoice or receive money and it does not go through. It hangs, times out, or throws an error you have never seen before. Nothing is wrong with your money. Your bitcoin are secure. What is broken is the service behind it.

These wallets do not run Lightning themselves for every payment, they are built using the [Liquid sidechain](https://anita.onl/difference-bitcoin-lightning-liquid-ecash). Behind the scenes, they route Lightning payments through a service called Boltz, which swaps your money into and out of Lightning, and also handles swaps with Liquid and USDT. On August 3, 2026, Boltz disabled its swap service after ongoing attacks on its own infrastructure. No user funds were stolen, since Boltz is self-custodial and never holds your coins. But as long as it is offline, any wallet that leans on it for Lightning cannot send or receive Lightning payments.

## What to do right now

Do not panic, your money is safe.

If you have not written down your wallet's backup or seed phrase, do it now, by hand, on paper. Never as a screenshot, never saved on a phone or computer.

If you have no urgent need to transact, wait. I am using Aqua and Misty Breez myself, and I am simply holding off until Boltz is back or the wallet providers route around it.

If you need your funds now, you can convert Liquid Bitcoin to on-chain Bitcoin without going through Boltz, for example via a [swap on sideswap.io](https://anita.onl/liquid-bitcoin-sideswap-boltz). That gets you spendable, self-custodied on-chain Bitcoin while the Lightning side stays down.

Nobody knows how long this will last, Boltz has not given a timeline. Watch [Boltz's own website](https://boltz.exchange) and their [X account](https://x.com/Boltzhq) for updates, that is where they are posting as the situation develops.

I am writing this article, because I feel responsible. I have onboarded many people to Aqua and Misty Breez over the past years. I recommended them because I did not see another option for people with small amounts of bitcoin to use Lightning while staying self-custodial - although not able to unilaterally swap out. Custodial Lightning wallets are simpler and cheaper to use than a  self-custodial Lightning wallet like Phoenix, but they hand your keys to someone else, and that was never something I wanted to teach people to do. These swap-based wallets were the best trade-off I knew of. Right now that trade-off has a real cost, and I really hope the issue is being settled soon.

## Why Boltz went dark

Here is [Boltz's statement](https://x.com/Boltzhq/status/2084311537502630319) from August 3, following the [Coldcard exploit](https://anita.onl/coldcard-exploit) that started July 30:

"Over the past months we have seen a steady rise in automated, AI-assisted probing of our infrastructure, and we have dealt with several exploits. Each was contained, but the pattern is clear: attackers now iterate faster than a team our size can find and patch. In the past few days alone we saw a drastic acceleration, and we do not believe this asymmetry will reverse. After reviewing the results of our own recent security scans, we cannot responsibly re-enable Boltz swaps, especially as we are being actively targeted by what appear to be multiple resourceful groups while we race to deploy fixes."

## What this means going forward

Since the Coldcard incident, developers across the ecosystem have started auditing wallets and services with their own AI tools, which will make Bitcoin software more resilient over time. People have lost real savings in these attacks, which is unsettling and very sad. The Bitcoin ecosystem will learn from it and improve a pattern Bitcoin has followed before: after the exchange hack on Mt. Gox in 2014, self-custodial tools were being developed and their usability and security improved.

