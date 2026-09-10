---
title: Bug in the Liquid Network Lets Hackers Steal 4,000 Bitcoin
taxonomy:
    tags: [Blog, Liquid, Bitcoin, Security, Lightning Network, Wallets, Commentary]
routes:
    default: '/liquid-hack'
date: 2026-09-08 13:00
dateformat: 'Y-m-d H:i'
summary: I used Liquid knowing the federation risk. When 4,000 bitcoin were stolen, a software bug was to blame, not the federated custody. Here is what I learned so far.
thumbnail: liquid-network-bitcoin-hack.jpg
template: article
---

# Bug in the Liquid Network Lets Hackers Steal 4,000 Bitcoin

## Federation Risks Exist, but They Were Not the Root Cause

Hackers exploited a bug in the Elements software which is the codebase of the Liquid Network and stole 4,000 bitcoin on September 6, 2026. The Liquid Network and Blockstream acknowledged the hack and announced to halt the network until further notice.

> Update: September 10, 2026
> Scammers immediately used the Liquid hack to impersonate Liquid and Blockstream urging users to "take action". Do not do this!
> Liquid and Blockstream are working on a solution. Just wait, from what I understand the network will be fully restored and your funds will be safe in a couple of days. 

Early on September 7, I saw a message from a friend warning me of the situation, but it was already too late. The theft was done, the network was paused. That caused a lot of stress for all Liquid BTC owners including me as the backing of our funds evaporated. The amount of Liquid BTC I owned was still displayed in my wallet, but in fact I lost it all as the BTC held by the Liquid federation were gone.

## What is Liquid?

[Liquid is a sidechain](https://my.cracktheorange.com/lightning-network/explainer-bitcoin-lightning-liquid-ecash/) of Bitcoin. The currency on Liquid is L-BTC and any amount of L-BTC is pegged to the equivalent in BTC. Those bitcoin are backing the Liquid bitcoin and are held by a federation of 15 members, which are located in many different countries.
In principle this works similarly to the early times of banking, when gold was deposited at the bank and was always redeemable for banknotes and coins. The process of exchanging BTC to L-BTC is called a peg-in and swapping out to Bitcoin is a peg-out.
Different to the Bitcoin network, which is decentralized and where everyone can use their self-custodied coins without the need for an intermediary at any time, the Liquid network is a federation.
You can not independently peg-out of the network. You require a member of the federation to convert L-BTC back to BTC.
This need for an intermediary to peg-out was always the main criticism of Liquid. Despite owning a seed - exactly like in Bitcoin - you're not independent. Not your keys, not your coins.

## Why did I use Liquid and advocate for it?

A seed alone is not giving you full self-custody. Why did I as a self-custody advocate use Liquid myself and even more onboard people to wallets like [Aqua](https://my.cracktheorange.com/wallets/aqua-wallet/) or Misty Breez that use Liquid in the background to facilitate Lightning payments?

I'd absolutely prefer anyone around the world to be able to use on-chain Bitcoin and be in full control of their money, but this is only possible if Bitcoin were centralized. Real decentralized blockchains can not scale to the capacity of facilitating all payments globally. If it's centralized, we don't need Bitcoin, enough centralized services with all their flaws exist.

A couple of years ago the transaction fees on Bitcoin increased to something like 25 USD and more. This happens when the network has to handle more transactions than there is space in a single block. It's a congestion of the network, where the transactions that pay the highest fees are the first to be processed. That makes Bitcoin unusable for small amounts and micropayments.

The Lightning Network was invented to solve this challenge but up until now it has been costly and too complicated for non-developers to run a node to have self-custody and full control over their money. The Phoenix wallet is a great solution for self-custodial Lightning but to use it a channel needs to be opened. The wallet manages everything for you, but if the Bitcoin on-chain fees are high, the opening of the channel is expensive. My work in the past years has been focused on transferring knowledge about Bitcoin and the practical use of it for people in the Global South, where usual payment amounts are lower than a couple of dollars. It was not possible to onboard someone who only uses small amounts to a wallet that eats all their funds during setup.

Two, three years ago the only alternative Lightning Wallets were Wallet of Satoshi and Blink, which worked excellently, but both were custodial (before they switched to using Spark in 2026) and in the case of Blink you needed to soft-KYC yourself by providing your phone number. These were no viable options for me working in the Global South, as they neither provided privacy nor self-custody.

I felt Liquid with its 15 member federation with an 11 out of 15 multisig dispersed in different jurisdictions was more secure than a single centralized custodian in El Salvador or in the case of Wallet of Satoshi in Australia. Liquid also provides privacy through so-called Confidential Transactions where all amounts and the type of assets being used are hidden (contrary to Bitcoin), which is especially important in authoritarian countries.

That's why I used Aqua and Misty Breez in workshops and tutorials. No email, no phone number needed, and a seed as backup, which is exactly how Bitcoin works. I could teach the same principles that prepared people for the use of bitcoin as soon as they had enough funds to switch into self-custody either by opening a Lightning channel or doing an on-chain transaction.

## What happened and now?

[Calle explained on Twitter](https://x.com/callebtc/status/2096877551884919120?s=20) (no official explanation has been given so far as things are not settled yet):
Liquid has confidential transactions that hide the amounts for improved privacy. A bug in how these transactions are validated (in the Elements software) caused inflation of Liquid BTC (L-BTC) and allowed the hackers to empty the entire sidechain.

I admit this incident humbled me - I never thought that a thing like this would happen on Liquid. That, of course, reminded me that every software can and will have bugs. In 2010 and 2018 inflation bugs occurred in Bitcoin. They were discovered and patched quickly.

I was always thinking about the federation risk and weighed it in comparison to the single custodian risk, privacy improvements and the accessibility of bitcoin for users that use smaller amounts. In a way, I was not wrong - the federation did not cause the problem! It was the bug in the Elements software and possibly problems while patching the bug. (Speculation; we need to wait for an official statement. Here is [another technical explainer](https://x.com/wauzibauzi/status/2097306071928885304?s=20).)

On September 7, 3,400 bitcoin were sent back after the hackers demanded that Blockstream and the other functionaries update the software and clean up all bugs. September 8, Blockstream announced that they are working on getting the service up and running again. It is unclear who will provide the missing 600 BTC and how Liquid users can and will be made whole again.

PS: Hopefully the system will be fully restored with all the funds. Then it's on everyone to decide if they want to peg-out their L-BTC to BTC or hold it on Liquid. But if you have been using [Misty Breez](https://breez.technology/misty), you HAVE to move your funds out asap as Misty Breez will no longer be available.

