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

# A Little Background About Me

I starterd using WHMCS in 2007 to run my hosting company. I quickly realized the importance of automation of this software envisioning how it would increase my productivity, boosting service quality and making my life easier. It was love at the first sight. I spent the next 6 years coding like crazy on scripts that allowed me to run my business on autopilot. Everything was working automagically.

More than once I managed to anticipate trends and technologies directly in my WHMCS. Here are some examples:

* Bill clients for the actual usage of server resources on a hourly basis before OnApp and Advanced Billing were invented
* Install any CMS in one click from client area years before Plesk and cPanel incorporated this feature
* Web panels to manage Teamspeak, Ventrilo and hundreds of game servers with dynamic batch scripts

Quick forward to 2014, I have drawn the attention of some big names (and also massive ddos attacks) so I decided to sell my company and move to software development. That's when I created [katamaze.com](https://katamaze.com) and released several modules for WHMCS based on my deep knowledge of this system and scripts I used to run my previous business.

Over the years I've worked for or have helped to build hundreds if not thousands of providers. I was so confident that I focused on completing the lacks of WHMCS (eg. billing, affiliates, CMS, SEO) and fixing its bugs. In retrospect, I shouldn't have done this and if you are reading this you can probably guess why.

# Current State of WHMCS

I wrote a lenghty article on why [providers should avoid WHMCS](https://katamaze.com/blog/54/avoid-whmcs-blesta-hostbill-clientexec-ubersmith-hosting) and alternatives. Here I'll keep it short with the help of some memes.

<table>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/coding-in-whmcs-feels-like.jpg">
  </td>
  <td>
   Coding in WHMCS is miserable.<br><br>
   I am not referring to the encoded source code of WHMCS but to its development cycle that is a forced march where releases go from beta to (un)stable at the speed of light.<br><br>
   Every release is a pile of bugs most of which are never addressed and add up to existing ones.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/6d2b72aa2928dec7d2441219abc2da19/shoveling-bugs-in-whmcs.jpg">
  </td>
  <td>
   That's how you feel while debugging in WHMCS.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/creating-modules-for-whmcs.jpg">
  </td>
  <td>
   Try making something more complex than a template and you condemn yourself to a living nightmare. WHMCS staff is obtuse and put everything in End of Life in no time forcing you to rethink entire chunks of code over and over again.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-listeing-to-customers.jpg"/>
  </td>
  <td>
   «We appreciate discussions»<br>
   «Your feedback matters»<br>
   «I appreciate your feedback»<br>
   «You are welcome to discuss this»<br><br>
   Lies.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-not-fixing-bugs.jpg"/>
  </td>
  <td>
   WHMCS approach to bug fixing.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/6d2b72aa2928dec7d2441219abc2da19/whmcs-fixing-bug.jpg"/>
  </td>
  <td>
   Speaking of bugs, I don't want to be too harsh towords WHMCS. I give them credit for fixing some bugs that have been reported back in 2010.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-feature-requests.jpg"/>
  </td>
  <td>
   The place where good ideas go to die.<br><br>
   Many invest considerable amount of time writing detailed requests but WHMCS don't give a damn. As proof of this, they forget to approve incoming requests for months and close the most popular ones without saying a word.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-new-feature.jpg"/>
  </td>
  <td>
   They flood us with barely tested features that make little or no sense for their customer base.<br><br>
   They take design from Instagram, authentication from Google, mix it with a bit of Facebook and expect us to make some sense out of this Frankenstein's monster.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-release-changelog.jpg"/>
  </td>
  <td>
   Literally every release of WHMCS.<br><br>
   Bugs probably account for the 10% of this software. Isn't it scary? As a reference I started fixing billing bugs in 2008 with <a href="https://katamaze.com/whmcs/billing-extension/specifications">Billing Extension</a> (one of my modules). 100% of problems I fixed are still part of the latest release of WHMCS.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-the-myth-of-stable-release.jpg"/>
  </td>
  <td>
   Whenever you report a bug you will be met with one of the following replies:<br><br>
   «It is working as intended»<br>
   «Submit a feature requests»<br><br>
   They have the innate ability to turn turning bugs into feature requests.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-ease-of-use.jpg"/>
  </td>
  <td>
   If they were car manufacturers rather than developers then there would be cars with triangular wheels, driver seats facing backward and airbags just below your butt.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/passive-aggressive-communication-by-whmcs.jpg"/>
  </td>
  <td>
   They have no problem at lying at your face and insult your intelligence. For example when they increased prices up to 4000% during the coronavirus pandemic, they had the nerve to say that pricing didn't change by this much. It's maths, not an opinion.<br><br>
   As much as they claim to love and welcome discussion, they avoid answering to uncomfortable questions with the usual blah blah blah and proceed closing threads like nothing happened.<br><br>
   Moreover they are also very disrespectful towards third-party developers. They had no problem at making back door deals with some developers in contrast with their own written rules promoting an unhealty competition.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-taxing-customers.jpg"/>
  </td>
  <td>
   Massive license price hike (4000%), death of lifetime licenses, moved from monthly subscription to basically a % of your revenue. Do you also want a butt slice?<br><br>
   They are leading small and medium sized companies to death. You can either shut down, go away or become a reseller of services of their partners with big pockets.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-the-future-hosting-industry.jpg"/>
  </td>
  <td>
   You can take as granted that in this whole industry every software is intended to cost you more and more. Or even worse they want a percentage of your revenue.
  </td>
 </tr>
 <tr>
  <td width="300" align="center">
   <img src="https://katamaze.com/modules/addons/Mercury/uploads/files/Blog/3c3e3a81cf0ca6e2aeb59bfb6d4be904/whmcs-blesta-hostbill-clientexec-ubersmith.jpg"/>
  </td>
  <td>
   Speaking of alternatives, in this industry promises are meant to be broken.<br><br>
   They promise you everything you want to hear to attract new customers, but eventually they all turn into the same shit.
  </td>
 </tr>
</table>

# What can we do?

If you made it this far in the article, I definitely got your attention. You may ask what's my solution to this decaying software and its business model that sees clients as cows to milk. I am more than glad to respond.

WebPros owns WHMCS and among other things also Plesk and cPanel. More than once they proved they can acquire anything that is worth their money. It doesn't matter what the CEO of this or that panel promise you today. We all learned the lesson that money can buy everything in this industry.

Moreover I don't see how the provider that keeps migrating from one panel to another of inferior value on every price hike can support the growth of his/her business. How can you do that by constantly downgrading your technology level? And I am not even mentioning the costs for migrations.

In my opinion the only true solution is relying on a software that is free & open source. A software of this kind can't be acquired and unlike other panels it will base its development on the needs of end-users (providers) and not on the ones of partners with deep pockets.

The bad news is that this softare doesn't exists yet that's where I come into play.

I spent my whole career working for providers and I've been a provider myself. I coded very complex modules for WHMCS and have the required skills to start this project that I am going to name Leap.

# Leap, an alternative to WHMCS

Here is Leap in a nutshell in comparison with WHMCS

|  | Leap | WHMCS |
| ------------- | ------------- | ------------- |
| Source code | :hatching_chick: Open | :guardsman: Closed |
| License | :+1: Free | :punch: Commercial |
| Focus | :wave: Providers | :necktie: Definitely not providers |
| Revenue model | :heart: Sponsors | :cow2: Milking |

If you think that I am flying too high, please understand that over the years I managed to deliver more useful and tested features in my modules working alone than the entire staff of WHMCS combined. Let me give you an idea of what I'm talking about:

* [Turned WHMCS into a CMS](https://katamaze.com/whmcs/mercury/specifications) with blog, news, docs, feature requests, comments, bug reporting
* [SEO for WHMCS](https://katamaze.com/blog/45/whmcs-seo-increase-traffic) including SEO URLs, sitemap, GeoIP, OG Tags...
* Track sales with [Facebook Pixel](https://katamaze.com/docs/billing-extension/43/whmcs-facebook-pixel-tracking) and [LinkedIn Insight Tag](https://katamaze.com/docs/billing-extension/44/whmcs-linkedin-insight-tag-tracking)
* Reduce invoices by 80% and transactions fees by 18% with [monthly invoicing](https://katamaze.com/docs/billing-extension/4/whmcs-monthly-invoice)
* Provide support based on [Service Level Agreement](https://katamaze.com/docs/mercury/50/service-level-agreement)
* [Cash flow](https://katamaze.com/docs/billing-extension/51/whmcs-cash-flow) for tracking inflow and outflow of money
* [Customer Retention and Churn Rate](https://katamaze.com/docs/billing-extension/56/whmcs-customer-retention)
* [Advanced Invoice Data Snapshot](https://katamaze.com/docs/billing-extension/57/whmcs-editing-invoice-snapshot) that includes currency rates
* Perfect integration with [VIES](https://katamaze.com/docs/billing-extension/8/whmcs-vies), [Australian GST](https://katamaze.com/docs/billing-extension/46/australian-taxation-system), [Tax Stamp](https://katamaze.com/docs/billing-extension/32/tax-stamp-on-invoices)
* Issue [Credit notes](https://katamaze.com/docs/billing-extension/33/whmcs-issuing-credit-note)
* Stop issuing unnecessary invoices thanks to [invoice suppression](https://katamaze.com/docs/billing-extension/54/whmcs-invoice-suppression)
* [Automatic Batch Invoice Export](https://katamaze.com/docs/billing-extension/47/whmcs-automatic-batch-invoice-pdf-export). PDF files are sent via FTP and/or and email as attachments
* [Affiliation Network](https://katamaze.com/whmcs/commission-manager/specifications) with multiple [Attribution Models](https://katamaze.com/docs/commission-manager/40/whmcs-affiliates-attribution-model)
* [SorTable](https://katamaze.com/docs/general/3/whmcs-advanced-filtering), [HereLang](https://katamaze.com/docs/general/2/whmcs-translation-interface), [MagicInput](https://katamaze.com/docs/general/1/whmcs-improved-inputs)

The list goes on but I think you've got the idea. I even maintain documentation in two languages this is [bigger](https://katamaze.com/statistics) than WHMCS one.

Sometimes I wonder what WHMCS would have done in my place when I added [electronic invoicing](https://katamaze.it/docs/billing-extension/34/fatturazione-elettronica-whmcs-trasmissione-xml-sdi-ade) in their software. I know this article is written in italian but it still gives an idea the its complexity. I completed such a huge project in about 3 months meanwhile WHMCS with God knows how many employees is still trying to fix GDPR they broke in v8 (November 2020).

On the other hand, the average release of WHMCS contains (not counting bugs) microscopic features that I wouldn't even put in a changelog. For example a couple of years ago the calendar picker was the main new feature in a in a major release of WHMCS. It's a free jQuery library. Any decent developer can implement it in a couple of hours.

They are slow and their commitment is non-impactful. We have bugs from years that whould take minutes to fix. Similarly we are waiting for missing features that any skilled developer could complete in a couple of days. I don't want to sound presumptuous but I find incredible that a company of the size of WHMCS can't match the features delivered by a single developer.

# Tell me more about Leap

At this stage I prefer to lay the foundation of Leap only counting on a small group of people and providers that I personally know. Right now I don't want to involve too many people otherwise Leap will quickly turn into a bland and unachievable wish list and will never be released.

Initial funding is not a problem. I can count on a partnership 🙏, PNRR and some extra cash coming from crypto (ATOM 😜).

When we go live, I will sustain it with Github sponsors and donations. I will not enable them till the software reaches an acceptable level. The reason for that is simple. I don't like asking money only based on my good intentions that still need to be proved.

If you want to help, watch and star this project.


# Notes

The content below is tentative. They are just interal notes. What you see may not reflect what eventually is included in Leap. Manage your expectations accordingly.

### How to read tables

|  | Icon | Description |
| ------------- | ------------- | ------------- |
| Importance | ⭐<br>⭐⭐<br>⭐⭐⭐ | Low<br>Medium<br>High |
| Difficulty | 💣<br>💣💣<br>💣💣💣 | Low<br>Medium<br>High |
| Time | ⏰<br>⏰⏰<br>⏰⏰⏰ | Low<br>Medium<br>High |
| Status | 🟢<br>🟠<br>🔵<br>🔴<br>⚪ | Completed<br>In progress<br>Stalled<br>Dropped<br>New |

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
| Service status | ⭐ | 💣💣 | ⏰⏰  | Like Coinbase Pro Trading (footer) | ⚪ |

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
| Lock Screen | ⭐ | 💣💣 | ⏰⏰  | For inactivity and via shortcut keys | ⚪ |
| To-do List | ⭐ | 💣💣 | ⏰⏰  | With reminders and snooze | ⚪ |
| Shout function | ⭐ | 💣💣 | ⏰⏰  | Broadcasting any message to everyone matching filters | ⚪ |
| Google Calendar | ⭐ | 💣💣💣 | ⏰⏰⏰  |  | ⚪ |
| Feeds | ⭐ | 💣 | ⏰⏰  | For admins, childs and end-users | ⚪ |
| File Manager | ⭐ | 💣 | ⏰⏰  | Internal use (eg. CSV transmissions) | ⚪ |
| Chat | ⭐ | 💣💣 | ⏰⏰⏰  |  | ⚪ |
| Service status | ⭐ | 💣💣 | ⏰⏰⏰  | Like "Partially degraded" feature of Coinbase Pro | ⚪ |
| Organization chart | ⭐ | 💣 | ⏰⏰  |  | ⚪ |

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
| PHP OOP | ✔️ | >=7.2 | 🟠 |
| [PSR-1](https://www.php-fig.org/psr/psr-1/) | ✔️ | Coding standards | 🟢 |
| [PSR-4](https://www.php-fig.org/psr/psr-4/) | ✔️ | Autoloader | 🟢 |
| [PSR-11](https://www.php-fig.org/psr/psr-11/) | ❔ | DI-Container | ⚪ |
| Composer | ✔️ |   | 🟢 |
| Dependency Injection | ✔️ | Need multiple containers | 🟢 |
| Smarty ~~or Twig~~ | ❔ | ex-WHMCS users already know Smarty. Same for ex-WHMCS designers | 🟠 |
| jQuery | ✔️ |   | ⚪ |
| Bootstrap 5 | ✔️ |   | 🟠 |
| Node.js | ✔️ | Overkill. No need | 🔴 |
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
| [DataTables](https://datatables.net/) | ❔ | Too basic and clumsy | 🔴 |
| [SorTables](https://katamaze.com/docs/general/3/whmcs-advanced-filtering) | ✔️ | Refactored in line with [Material Design](https://material.io/components/data-tables) by Google | 🟠 |
| Multi-stream support for browsers | ✔️ | Parallel downloads | ⚪ |
| [MagicInput](https://katamaze.com/docs/general/1/whmcs-improved-inputs) | ✔️ |   | ⚪ |
| [HereLang](https://katamaze.com/docs/general/2/whmcs-translation-interface) | ✔️ |   | ⚪ |
| Toolbar | ✔️ | Pre-toolbar and toolbar with Type to Search | ⚪ |
| Sidebar | ✔️ | With Type to Search | ⚪ |
| Footer | ✔️ | With service status | ⚪ |
| Modal Generator | ✔️ |   | ⚪ |
| Installer | ✔️ | Classic. Zip, upload, enjoy | ⚪ |
| Automatic Updates | ❔ | So and so | ⚪ |
| Versioning | ✔️ | PHP [version_compare](https://www.php.net/manual/en/function.version-compare.php) compliant x.x.x | 🟠 |
| Publicly advertised cycles | ✔️ | Alpha, Beta, RC | ⚪ |

# Team

|  | Role | Effort | Notes | Status |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| P1K | Backend | 6 hours | Overloaded | Active |
| P2K | Frontend | 6 hours | RA | Active |
| P3K | Fullstack | 8 hours | RA | Hiring now |
| PXG | Dev team | Lot of hours |   | Doesn't depend on us |
| V1W | Backend | Don't know |   | Wait for now |
| V2Z | Frontend | Don't know |   | Wait for now |
| V3M | Dev team | Lot of hours | Surely not willing to work on `app` but `modules` | Ask when there's enough code to show |
| V4S | Frontend | Don't know |   | Wait for now |
| C13 | Tech, employees | Unlimited |   | Seed stage |
| P01 | Partner |  |  | Active |
| P02 | Partner |  |  | Active |
| C2F | Know-how, Beta-Tester |   | Provider | Active |
| C3P | Know-how, Beta-Tester |   | Provider | Active |
| C4R | Know-how, Beta-Tester |   | Provider | Wait for now |
| C5S | Know-how, Beta-Tester |   | Provider | Active |
| C6Q | Know-how, Beta-Tester |   | Provider | Wait for now |
| C7V | Know-how, Beta-Tester |   | Provider | Active |

# Funding

Software is free but needs funds.

|  | Status | Notes | Status |
| ------------- | ------------- | ------------- | ------------- |
| P1K | ✔️ | 1 | Funding |
| C13 | ✔️ | 3 | Funding |
| P01 | ✔️ | 2 | Funding |
| P02 | ✔️ | 5 | Funding |
| VX |  ❔ |   |   |
| C1F | ✔️ |   | Ready |
| C7V | ✔️ |   | Ready |
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
* All servers we need
* Office
  * PE 4 seats (P1K)
  * CH all seats you want (C13)
  * MI all seats you want (P01, P02)
  * PE new headquarter in 2022 (C13)
* Lifetime [Nielpatel](https://app.neilpatel.com/en/pricing?lang=en) for SEO
* 2x approved Google AdSense account
* Approved Amazon SP-API & MWS developer accounts
* Tens of various developer accounts
* Lifetime [TCAdmin](https://www.tcadmin.com/pricing/) 1x Pro Master, 3x Pro Remote Server in case we need to integrate game service providers
* Can contact thousands of providers

# Localisation

|  | Team | Notes |
| ------------- | ------------- | ------------- |
| English | P1K, P2K, P3K |   |
| Italian | P1K, P2K, P3K |   |

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
* Logging must be `::`

# More Notes

* Downlolad application/octect
* User roles: pages & actions
* Depended form fields
* Multiple language pickers
* Single-cron setup
* [This theme](https://coderthemes.com/hyper/saas/dashboard-projects.html) is a good source of ideas
* We should be using ajax + json + react-like page load that works offline (change URI via js)
* Sidebar and action menu should be populated by json object/array to avoid nested ifs in Smarty

