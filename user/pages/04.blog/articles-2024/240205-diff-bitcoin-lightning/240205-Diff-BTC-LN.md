---
title: "Lightning Network and Bitcoin - What's the Difference?"
taxonomy:
    tags: [Blog, Learn Bitcoin, Lightning Network]
routes:
    default: '/difference-lightning-bitcoin'
date: 2024-02-05 12:00
dateformat: 'Y-m-d H:i'
summary: "The differences between Bitcoin and Lightning: a look into Bitcoin on-chain transactions and how they are different from Lightning payments."
thumbnail: _Lightning-Bitcoin-Difference.jpeg
template: article
---

# Lightning Network and Bitcoin - What's the Difference?

Understanding the difference between Bitcoin's base layer and the Lightning Network is important even if you are just a regular user and not interested in the backgrounds of the technology. In this blog post, we'll explore what the Lightning Network is, its relationship with Bitcoin, and how it differs from the base Bitcoin protocol.

<iframe width="100%" height="473" src="https://www.youtube.com/embed/FxGtlKWsIkg?si=J8mVZjCrCRLpSkKG" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>


## The Base Layer: The Bitcoin ~~Blockchain~~ Timechain

To understand the Lightning Network, we first need to look at Bitcoin's base layer: the Timechain (as Satoshi Nakamoto called it - it’s Timechain, not blockchain). This is the fundamental layer where all Bitcoin transactions are recorded. Transactions on this layer require at least 10 minutes until they are confirmed, making Bitcoin transactions immutable, solving the double-spending problem and decentralizing the issuance of new bitcoin. It’s highly secure, but slow. Moreover, the mining fees for on-chain Bitcoin transactions will increase significantly in the future, rendering small UTXOs (the chunks of bitcoin) unspendable, because the fees are higher than the amount of bitcoin to be spent.

## The Lightning Network: A Second Layer Solution

The Lightning Network steps in as a second layer on top of the Bitcoin timechain. It's designed to facilitate fast payments with lower transaction fees and enhanced privacy. The Lightning Network operates through payment channels that are connected to the Bitcoin base layer. The key advantage here is the immediate settlement of payments. Unlike the base layer, where confirmations take time, payments on the Lightning Network are settled almost instantly, which means the ownership of the bitcoin is immediately in the hands of the recipient. In this [article I explain the Lightning Network and Liquid sidechain and how they relate to Bitcoin in simple terms](https://anita.onl/difference-bitcoin-lightning-liquid-ecash).

## Self-Custody vs. Custodial Lightning Wallets 

It's also important to understand the difference between self-custodial Lightning wallets like Phoenix or Breez and custodial wallets like Coinos or Wallet of Satoshi. In a self-custody wallet, you have complete control over your keys and your bitcoin. On the other hand, custodial wallets are managed by third parties, and it’s them who hold the keys similar to how banks operate with fiat money. You don’t own the money in your bank account, which you’ll notice, when the bank restricts access to your account, something that is happening very often. You can [learn how to set up the self-custodial Phoenix Lightning wallet in this 10 min tutorial](https://anita.onl/lightning-self-custody-phoenix). 

## Conclusion: Bitcoin versus Lightning

The Lightning Network is Bitcoin and represents a significant step in scaling Bitcoin for everyday use, offering faster payments, lower fees, and more privacy. As the technology continues to evolve, it becomes increasingly important for users to understand these layers and choose the right tools for their goals.

## Do you want to learn more about Bitcoin? 

> * Subscribe to my weekly newsletter: [The Orange Journal](https://anita.link/news)
> * Join my Bitcoin learning platform [Crack The Orange](https://cracktheorange.com) and I'll give you all the tools and knowledge you need to use Bitcoin in a secure way.
> * Read my book [(L)EARN BITCOIN](https://learnbitcoin.link/)
