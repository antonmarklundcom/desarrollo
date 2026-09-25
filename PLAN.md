# desarrollo.com.py — Build Plan

Goal: the #1 Spanish-language site in Paraguay for "desarrollo de software / apps / web / IA", turning organic traffic into qualified WhatsApp + form leads (VenderCRM).
Out of scope: cybersecurity services (lives on ciberseguridad.com.py — cross-link only).

## 1. Positioning

- **Promise:** "Software a medida, apps y soluciones con IA para empresas paraguayas — precios en guaraníes, factura legal, equipo local."
- **Differentiators to repeat everywhere:** fixed-price quotes in Gs., SIFEN/e-kuatia electronic invoicing integration, Bancard / Pagopar / Tigo Money / Personal payments, WhatsApp-first, delivery in weeks (AI-accelerated dev), local support in Asunción + remote nationwide.
- **Language:** Spanish (Paraguay). Guaraní greeting touches only in copy, not SEO pages.

## 2. Services (money pages, ordered by lead value × search demand)

| # | Service | URL | Notes |
|---|---|---|---|
| 1 | Desarrollo de software a medida | /desarrollo-de-software | Pillar page, highest ticket |
| 2 | Desarrollo web / diseño de páginas web | /paginas-web | Highest volume; tiers: landing, institucional, corporativa |
| 3 | Tiendas online / e-commerce | /tienda-online | Bancard, Pagopar, WooCommerce, Shopify, custom |
| 4 | Desarrollo de apps móviles | /desarrollo-de-apps | iOS + Android, React Native/Flutter |
| 5 | Inteligencia artificial para empresas | /inteligencia-artificial | Umbrella for 6–8 |
| 6 | Chatbots y agentes IA para WhatsApp | /chatbot-whatsapp | Huge PY fit (WhatsApp nation) |
| 7 | Automatización de procesos | /automatizacion | n8n/Make/Zapier, RPA, Excel→system |
| 8 | Integraciones y APIs | /integraciones | SIFEN facturación electrónica, bancos, ERPs |
| 9 | Sistemas de gestión (ERP / CRM / inventario / facturación) | /sistemas-de-gestion | Sub-pages per system type |
| 10 | SaaS & MVP para startups | /desarrollo-mvp | Founders, fixed-scope MVP |
| 11 | Mantenimiento y soporte / hosting | /mantenimiento-web | Recurring revenue |
| 12 | Consultoría y outsourcing de programadores | /outsourcing-programadores | Staff augmentation, also for foreign clients |
| 13 | Posicionamiento SEO + marketing web | /seo | Upsell with web builds |

## 3. SEO architecture

- **Pillars:** the 13 service pages above, each 1,500–2,500 words, FAQ schema, price block, process, stack, CTA.
- **Industry pages** (/soluciones/{industria}): inmobiliarias, clínicas, estudios contables, abogados, restaurantes, logística, agro/ganadería, colegios, gimnasios, retail/farmacias, cooperativas, concesionarias. Each = problem → software we build → example → CTA.
- **City pages** (/desarrollo-web-{ciudad}): Asunción, Ciudad del Este, Encarnación, San Lorenzo, Luque, Fernando de la Mora, Lambaré, Capiatá, Pedro Juan Caballero, Villarrica. Unique local content (no spinning).
- **Price pages (big lead magnets):** "cuánto cuesta una página web en Paraguay", "precio de una app", "costo de software a medida", "precio chatbot WhatsApp".
- **Calculators/tools:** cotizador de página web, cotizador de app, calculadora ROI de automatización, generador de brief de proyecto → all end in lead form.
- **Blog/guías (40 at launch, then 8/month):** facturación electrónica SIFEN, cómo elegir agencia, WordPress vs a medida, IA para pymes, integrar Bancard, apps en Paraguay, etc.
- **Portfolio / casos** (/casos): 6–10 case studies (use own sites: propia.com.py, alquilar.com.py, contador.com.py, VenderCRM…).
- **Technical SEO:** sitemap.xml, hreflang es-PY, LocalBusiness + ProfessionalService + Service + FAQPage + BreadcrumbList schema, Core Web Vitals green, internal linking hub-and-spoke, Google Business Profile (Asunción).

## 4. Conversion

- Sticky WhatsApp button + form on every page → VenderCRM (`/api/v1/leads`), lead value per service in `content/lead-values.php`.
- Every calculator result gated by "enviar cotización" (name, WhatsApp, company).
- Trust: price ranges in Gs., RUC/factura, testimonials, team, guarantee, "respuesta en 1 hora hábil".
- Offers: free 30-min consultoría, free web audit, "MVP en 30 días".

## 5. Stack

Start from `antonmarklundcom/php-site-template` (static HTML + PHP, Hostinger shared hosting, PY market module, `verify.sh`). No DB needed. Calculators in vanilla JS. Lead form → VenderCRM. Images via the webimg pipeline (only when explicitly requested).

## 6. Build phases — one PR each

Foundation lane (sequential, Opus medium):

| PR | Scope | Done when |
|---|---|---|
| **PR1 – Scaffold** | Copy template, PY market module, brand config, colors/fonts, header/footer/nav (mega-menu: Servicios, Soluciones, Precios, Casos, Blog), 404, robots, sitemap generator, schema helpers | `verify.sh` green, deploy to Hostinger |
| **PR2 – Home + core pages** | Home, /nosotros, /contacto, /precios hub, /casos hub, legal pages, cross-link to ciberseguridad.com.py | Lighthouse ≥95 |
| **PR3 – Lead engine** | Contact form → VenderCRM, WhatsApp CTA, lead values per service, thank-you page, GA4/GSC events | Test lead lands in CRM |

Content lane (parallel, Opus low/medium, each PR owns its own files):

| PR | Scope |
|---|---|
| **PR4** | Service pillars 1–4 (software, web, e-commerce, apps) |
| **PR5** | Service pillars 5–9 (IA, chatbot WhatsApp, automatización, integraciones, sistemas de gestión + 4 sub-pages: ERP, CRM, inventario, facturación electrónica) |
| **PR6** | Service pillars 10–13 (MVP, mantenimiento, outsourcing, SEO) |
| **PR7** | 4 price pages + 2 calculators (web, app) |
| **PR8** | 2 calculators (ROI automatización, brief generator) + /herramientas hub |
| **PR9** | 12 industry pages (/soluciones/*) |
| **PR10** | 10 city pages |
| **PR11** | Portfolio: 6–10 case studies |
| **PR12** | Blog system + first 20 guides |
| **PR13** | Guides 21–40 + FAQ hub + glossary (/glosario) |
| **PR14** | SEO QA: internal-link audit, schema validation, sitemap, image alt, CWV, broken links |

Post-launch: GBP setup, 8 articles/month, monthly GSC review → expand pages ranking 8–20.

## 7. Instructions for the builder session

- Each PR: read this file, only touch files for that PR, run `verify.sh`, keep Spanish (es-PY), prices in Gs. with "desde" ranges, one H1, meta title ≤60 chars, meta description ≤155, FAQ schema on every money page, ≥5 internal links per page.
- Do not generate images unless the owner explicitly asks.
- Never offer cybersecurity services; link to ciberseguridad.com.py instead.
