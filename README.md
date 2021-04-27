#### Table of Contents
- [A Little Background About Leap](#a-little-background-about-leap)
- [Must-Have Features](#must-have-features)
- [Integrations](#integrations)
- [Framework](#framework)
- [Team](#team)
- [Funding](#funding)
- [Localisation](#localisation)
- [Questions](#questions)
- [Conventions](#conventions)
- [Internal Notes](#internal-notes)

# A Little Background About Leap

I've been using WHMCS since 2008. For plenty of time developing modules on this platform has been my main source of income. I used to love WHMCS but my opinion started to change when WebPros, a capital group, acquired in a very short timeframe WHMCS, Plesk, cPanel and some other hosting-related companies aiming to increase prices across the board.

The idea behind this is to milk hosting providers for as much money as possible by taxing their revenue with this new unethical method of charging costs based on the number of active customers. To make the whole thing even more disgusting, WebPros is acquiring all softwares that providers rely on. And they're pretty damn quick at doing this.

Plesk and cPanel are the perfect example. They're the best hosting panels the money can buy and they're both owned by WebPros meaning that they can freely increase prices without risking to lose customers. In fact, a part from Plesk and cPanel, there aren't many options left. Yes, there's DirectAdmin but it is not as complete as its counterparts. Moreover there's no guarantee that WebPros will eventually decide to acquire them too.

The same story principle to WHMCS. In the middle of the COVID-19 crisis they increased prices up to 3154%. I know providers that will start paying 15.599$ per year instead of 479$. What options we have? Maybe you can think of moving to any of WHMCS competitors like Blesta, HostBill, ClientExec or Ubersmith but let's admit it. No one can prevent WebPros from acquiring them in no time. And it doesn't matter what Blesta or HostBill promise you today. I think we all learnt the lesson that money can buy everything in this business.

Switching to another software to avoid yet another price increases, has been proved to be a bad strategy as WebPros is can easily acquire every software that is worth their money. Not to mention that changing servers, panels and softwares every couple of years costs time and moeny.

In my opinion the only true solution is breaking this chain moving to a replacement of WHMCS that is open source and free. A software of this kind can't be acquired by anyone. Moreover, unlike WHMCS that keeps releasing features based on their partner needs (the ones with deep pokets that dictate rules), the development of this software will always be focus on providers.

[I know WHMCS enough](https://katamaze.com/blog/41/whmcs-cons) (including its many bugs, secrets, flaws and missing features). I exactly know what are the needs of providers and I have the required skills to complete this work.

As you can see from the following paragraphs, I'm already working on things including forming a team and getting people involved. We need as many developers, designers and providers as possible to speed up the process. If you want to partecipate, watch and star this repository. I will provide more details in the following weeks/months.

Keep in mind that every open source and free software still needs a way to fund activities. I will be using Github sponsors and donations but I will not enable them till the software reaches the the acceptable level. The reason is that I don't like asking money only based on my good intention that still need to be proved.

### How to read tables

|  | Icon | Description |
| ------------- | ------------- | ------------- |
| Importance | ⭐<br>⭐⭐<br>⭐⭐⭐ | Low<br>Medium<br>High |
| Difficulty | 💣<br>💣💣<br>💣💣💣 | Low<br>Medium<br>High |
| Time | ⏰<br>⏰⏰<br>⏰⏰⏰ | Low<br>Medium<br>High |
| Status | 🟢<br>🟠<br>🔵<br>🔴<br>⚪ | Completed<br>In progress<br>Stalled<br>Dropped<br>New |

# Must-Have Features

## CMS

- Facilitator: [Mercury](https://katamaze.com/whmcs/mercury/specifications).
- ETA (very tentative): 50 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| News | ⭐⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Blog | ⭐⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Docs | ⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Feature Requests | ⭐ | 💣💣💣 | ⏰⏰⏰  | Bad idea | 🔵 |
| FAQ | ⭐ | 💣 | ⏰  |   | ⚪ |
| Bug Reporting | ⭐ | 💣💣 | ⏰  |   | ⚪ |
| Comments | ⭐ | 💣💣 | ⏰  | reCAPTCHA | ⚪ |
| Downloads | ⭐ | 💣 | ⏰⏰  |   | ⚪ |
| Widgets | ⭐⭐ | 💣 | ⏰⏰  |   | ⚪ |
| Page builder | ⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |

## SEO

- Facilitator: [Mercury](https://katamaze.com/whmcs/mercury/specifications).
- ETA (very tentative): 20 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Meta tags | ⭐⭐⭐ | 💣 | ⏰  |   | ⚪ |
| JSON-LD | ⭐ | 💣 | ⏰  |   | ⚪ |
| Canonical URL | ⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Sitemap generator | ⭐ | 💣💣 | ⏰  | Language/Country [XML nodes](https://katamaze.com/docs/mercury/31/whmcs-sitemap-generator#XML-Structure) | ⚪ |
| Multi-language stuff | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  | Fallback for missing translations | ⚪ |
| SEO URL | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Open Graph Protocol | ⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| HTML Semantic Elements | ⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |
| Prevent SEO-bs (keyword stuffing, length etc.) | ⭐⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |
| SERP preview | ⭐⭐⭐ | 💣 | ⏰  | [Moz-like](https://moz.com/learn/seo/title-tag) | ⚪ |
| Blackhat SEO protection | ⭐⭐ | 💣💣 | ⏰  |   | ⚪ |
| Disavow tool | ⭐ | 💣 | ⏰  |   | ⚪ |
| Basic statistics (hits) | ⭐ | 💣💣💣 | ⏰⏰⏰  | Graphs | ⚪ |

## Billing

- Facilitator: [Billing Extension](https://katamaze.com/whmcs/billing-extension/specifications).
- ETA (very tentative): 80 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Basic engine | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| EU | ⭐⭐ | 💣💣 | ⏰  |   | ⚪ |
| UK | ⭐ | 💣 | ⏰  |   | ⚪ |
| AU | ⭐ | 💣 | ⏰  |   | ⚪ |
| DE | ⭐ | 💣 | ⏰  |   | ⚪ |
| IT | ⭐⭐⭐ | 💣💣💣 | ⏰⏰  |   | ⚪ |
| General-purpose e-invoicing | ⭐⭐⭐ | 💣 | ⏰ |   | ⚪ |
| Italian electronic invoicing | ⭐⭐⭐ | 💣 | ⏰⏰⏰  | Aruba. End of the story | ⚪ |
| User-based billing cycles | ⭐⭐⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |
| User-based billing modes | ⭐⭐⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |
| Credit notes | ⭐⭐⭐ | 💣💣 | ⏰  |   | ⚪ |
| Overpayments | ⭐⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Credit balance | ⭐⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Cashflow | ⭐⭐⭐ | 💣💣 | ⏰⏰⏰  |   | ⚪ |

## Support tickets

- Have to be created from scratch.
- ETA (very tentative): 40 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Standard suite | ⭐⭐⭐ | 💣 | ⏰⏰⏰  |   | ⚪ |
| Service level agreement | ⭐⭐ | 💣💣 | ⏰⏰  | Working hours, holidays etc. | ⚪ |
| Emergency | ⭐ | 💣 | ⏰  |   | ⚪ |
| Premium | ⭐⭐ | 💣 | ⏰  | Paid support tickets | ⚪ |

## Multi-domain

- Facilitator: [Mercury](https://katamaze.com/whmcs/mercury/specifications), [Payments Bundle](https://katamaze.com/whmcs/payments-bundle).
- ETA (very tentative): 60 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Whitelabel support with master (own company) and child (resellers and wannabes) brands | ⭐⭐⭐ | 💣💣 | ⏰⏰⏰  | Template, logo, names, emails | ⚪ |
| Brand-based pricing | ⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Multiple merchants (eg. paypal accounts) | ⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Country-based payment gateways | ⭐ | 💣 | ⏰  |   | ⚪ |
| Geolocation: Auto-redirect (watch out EU regulations!) | ⭐ | 💣💣 | ⏰  |   | ⚪ |
| Geolocation: Auto-complete fields | ⭐⭐ | 💣💣 | ⏰  |   | ⚪ |

## OAuth-based API

- Facilitator: Can re-use the structure from another project.
- ETA (very tentative): 30 FTE
 
|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Basic engine | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Scopes implementation | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  | Owner, resellers, end-users | ⚪ |
| Keyword-based requests | ⭐ | 💣 | ⏰  |   | ⚪ |
| lazy-API for idiots | ⭐ | 💣 | ⏰  | Nope | 🔴 |

## Action hooks

- ETA (very tentative): 15 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Basic engine | ⭐⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| Entrypoints, NVP etc. | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |

## Affiliate Marketing

- Facilitator: [Commission Manager](https://katamaze.com/whmcs/commission-manager).
- ETA (very tentative): 60 FTE

|  | Importance | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Basic engine | ⭐⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Last-click attribution | ⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Interactive attribution | ⭐ | 💣 | ⏰  |   | ⚪ |
| Manual attribution | ⭐⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Prevent cross-affiliation & exploits | ⭐⭐⭐ | 💣💣 | ⏰  |   | ⚪ |
| Unlockable rewards | ⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |

## Miscellaneous

|  | Priority | Difficulty | Time | Thoughts | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- | ------------- |
| Migration tool from WHMCS | ⭐⭐⭐ | 💣 | ⏰⏰⏰  |  | ⚪ |
| Snapshot order details | ⭐⭐⭐ | 💣 | ⏰⏰  |   | ⚪ |
| Facebook Pixel | ⭐⭐⭐ | 💣💣 | ⏰⏰  |   | ⚪ |
| LinkedIn Insight Tag | ⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Google Ad | ⭐⭐ | 💣💣💣💣 | ⏰⏰  |   | ⚪ |
| Google AdSense | ⭐⭐ | 💣 | ⏰  |   | ⚪ |
| Selling physical products | ⭐⭐ | 💣💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Selling on Amazon, eBay, Zalando etc. | ⭐⭐ | 💣 | ⏰⏰⏰  |   | ⚪ |
| End-users can sell on Marketplaces | ⭐⭐ | 💣💣💣 | ⏰⏰⏰  |   | ⚪ |
| Admin roles | ⭐⭐⭐ | 💣💣💣 | ⏰⏰  |   | ⚪ |
| Logging | ⭐⭐⭐ | 💣💣💣 | ⏰⏰  |   | ⚪ |

# Integrations

Avoid "exotic" solutions for now.

## Domains

|  | Priority | Hate-o-Meter | Notes | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Internetbs | 1️⃣ | 😊 |   | ⚪ |
| eNom | 4️⃣ | 😡 |   | ⚪ |
| ResellerClub | 3️⃣ | 😕 | It's LogicBoxes. Integrate one to integrate many | ⚪ |
| Hexonet | 2️⃣ | 😊 |   | ⚪ |

## Hosting

|  | Priority | Hate-o-Meter | Notes | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| Plesk | 1️⃣ | 😡 | Most used | ⚪ |
| cPanel | 2️⃣ | 😡 |   | ⚪ |
| DirectAdmin | 3️⃣ | 😊 |   | ⚪ |

## Payment Gateways

|  | Priority | Hate-o-Meter | Notes | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| PayPal | 1️⃣ | 😡 |   | ⚪ |
| Stripe | 2️⃣ | 😕 |   | ⚪ |
| Other | 3️⃣ | 😊 |   | ⚪ |

# Framework

|  | Approved | Notes | Status |
| ------------- | ------------- | ------------- | ------------- |
| PHP OOP | ✔️ | >=5.6 or >=v7 | 🟠 |
| [PSR-1](https://www.php-fig.org/psr/psr-1/) | ✔️ | Coding standards | 🟢 |
| [PSR-4](https://www.php-fig.org/psr/psr-4/) | ✔️ | Autoloader | 🟢 |
| Composer | ✔️ |   | 🟢 |
| Smarty ~~or Twig~~ | ❔ | ex-WHMCS users already know Smarty. Same for ex-WHMCS designers | 🟠 |
| jQuery | ✔️ |   | ⚪ |
| Bootstrap 5 | ✔️ |   | 🟠 |
| ionCube | 🚫 |   | ⚪ |
| MySQL | ✔️ |   | 🟠 |
| MSSQL | ❔ | `LIMIT` `OFFSET` `TOP` | 🔵 |
| Strict Mode | ✔️ | Avoidable? | 🟠 |
| GTFO Mode | ✔️ | No js? R301 & bye bye | ⚪ |
| Laravel | ❔ | What's the point? Raw PDO | ⚪ |
| Bootstrap | ✔️ |   | 🟠 |
| FontAwesome | ✔️ |   | 🟠 |
| Sprite CSS | ✔️ |   | ⚪ |
| User authentication | ❔ | OAuth, bcrypt (custom) or framework-based (Zend?) | ⚪ |
| TCPDF | 🚫 | Find alternative. Dompdf or mPDF | ⚪ |
| [Highcharts](https://www.highcharts.com/demo) | ❔ | 449.55 € per developer | ⚪ |
| [DataTables](https://datatables.net/) | ❔ | Front-end tables | ⚪ |
| [SorTables](https://katamaze.com/docs/general/3/whmcs-advanced-filtering) | ✔️ | Back-end tables | ⚪ |
| Multi-stream support for browsers | ✔️ | Parallel downloads | ⚪ |
| [MagicInput](https://katamaze.com/docs/general/1/whmcs-improved-inputs) | ✔️ |   | ⚪ |
| [HereLang](https://katamaze.com/docs/general/2/whmcs-translation-interface) | ✔️ |   | ⚪ |
| Installer | ✔️ | Classic. Zip, upload, enjoy | ⚪ |
| Automatic Updates | ❔ | So and so | ⚪ |
| Versioning | ✔️ | PHP [version_compare](https://www.php.net/manual/en/function.version-compare.php) compliant x.x.x | 🟠 |
| Publicly advertised cycles | ✔️ | Alpha, Beta, RC | ⚪ |

# Team

|  | Role | Effort | Notes | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| P1K | Backend | 2 hours | Overloaded | Active |
| P2K | Frontend | 2 hours | RA | Active in a couple of weeks |
| PXG | Dev team | Lot of hours |   | Doesn't depend on us |
| V1W | Backend | Don't know |   | Need to ask |
| V2Z | Frontend | Don't know |   | Need to ask |
| V3M | Dev team | Lot of hours | Surely not willing to work on `app` but `modules` | Ask when there's enough code to show |
| V4S | Frontend | Don't know |   | Need to ask |
| C13 | Tech, employees | Unlimited |   | Seed stage |
| C2F | Know-how, Beta-Tester |   | Provider | Active |
| C3P | Know-how, Beta-Tester |   | Provider | Active |
| C4R | Know-how, Beta-Tester |   | Provider | Need to ask |
| C5S | Know-how, Beta-Tester |   | Provider | Active |
| C6Q | Know-how, Beta-Tester |   | Provider | Need to ask |

# Funding

Software is free but needs funds.

|  | Status | Notes | Status |
| ------------- | ------------- | ------------- | ------------- |
| P1K | ✔️ |   | Ready |
| C13 | ✔️ |   | Seed stage |
| VX |  ❔ |   |   |
| Github Sponsor | ✔️ | 7$ and 14$ a month (free choice) | Ready |
| % on revenue | 🚫 | Absolutely not |   |
| Donations | ✔️ |   |   |
| Partnership | ✔️ | Can only work with some registrars |   |
| Involve Data Farm | ❔ | Sell data and tracking |   |
| Ads | ✔️ | On our website (not in the software) | Ready |
| Freemium | 🚫 |   |   |
| Donation/Tip Goal | ❔ | "Goal: Feature X - Still 1.000 $ to go"  |   |
| SLA | ❔ | Risky |   |

Also have the following:

* vBulletin license (we need a forum)
* 4x WHMCS licenses to start working on a migration script
* ionCube Pro & Special Edition GUI (2 seats) but I guess we don't need it 😆
* [FontAwesome Pro Standard](https://fontawesome.com/plans) license (5 seats)
* Servers
* Office
  * PE 4 seats (P1K)
  * CH all seats you want (C13)
  * MI don't know yet (C13)
* Lifetime [Nielpatel](https://app.neilpatel.com/en/pricing?lang=en) for SEO
* 2x approved Google AdSense account
* Approved Amazon SP-API & MWS developer accounts
* Tens of various developer accounts
* Lifetime [TCAdmin](https://www.tcadmin.com/pricing/) 1x Pro Master, 3x Pro Remote Server in case we need to integrate game service providers
* Can contact thousands of providers

# Localisation

|  | Team | Notes |
| ------------- | ------------- | ------------- |
| English | P1K, P2K |   |
| Italian | P1K, P2K |   |

# Questions

### How to prove we won't roll over for clowns (cough WebPros) some day in the future

* Crypto-something with locked funds in tokens/wallets ❔
* Old school notarial deed ❔
* Reputation ❔
* We can't ❔
* Stop selling WHMCS modules ✔️

### Customer support

* Github ✔️
* Stack Overflow ❔
* Forum ✔️
* Ticket ❔

### Licensing

* MIT 🚫
* GPL v3 ✔️ copyleft
* BSD ✔️
* Custom ❔

Basic idea. Free for personal and commercial use but "All rights reserved". Derived work? The whole work must be free and open source.

# Conventions

* Avoid nested `if`, `return` instead
* Stick to `AND`, `OR` instead of `&&`, `||` logic operators. Many devs don't know anything about precedence
* Classes `StudlyCaps`. Methods & variables `camelCase`
* Same spacing for js and PHP
* Avoid `;` for last CSS rule
* Data as `array` not `StdClass` or you're a dead man

# Internal Notes

* Navigation & actions vs sidebars, navbar, cog
* Downlolad application/octect
* User roles: pages & actions
* Depended form fields
