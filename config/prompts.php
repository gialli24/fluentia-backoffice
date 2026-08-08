<?php

$realPrompts = [
    (object) [
        'title' => 'Senior Laravel & React Code Reviewer',
        'description' => 'Un prompt avanzato progettato per analizzare snippet di codice Laravel e React. Valuta la qualità del codice, individua potenziali vulnerabilità di sicurezza, problemi di performance (come le query N+1 in Eloquent) e suggerisce refactoring seguendo i principi SOLID e le best practice del framework.',
        'content' => "Agisci come un Principal Software Architect specializzato nell'ecosistema Laravel e React. Il tuo compito è analizzare il seguente snippet di codice e fornire una revisione approfondita e strutturata.\n\nCodice da analizzare:\n[INSERISCI_CODICE_QUI]\n\nConcentrati sui seguenti aspetti:\n1. Architettura e Pulizia (Principi SOLID, DRY, naming convention).\n2. Prestazioni (query Eloquent inefficienti, re-render inutili in React, gestione stato).\n3. Sicurezza (sanitizzazione input, gestione auth/policy, CSRF, XSS).\n4. Testabilità e scalabilità.",
        'instructions' => "1. Leggi attentamente il codice fornito dall'utente.\n2. Inizia con un breve riassunto sintetico delle condizioni generali del codice (punteggio da 1 a 10).\n3. Elenca i problemi critici (Bugs, Security Threats) evidenziando le righe di codice interessate.\n4. Proponi un refactoring completo del codice in un blocco formattato.\n5. Mantiieni un tono professionale, diretto e costruttivo.",
        'output_type' => 'markdown',
        'output_content' => "### 🔍 Analisi del Codice\n\n**Punteggio globale:** 7/10\n\n#### ⚠️ Criticità Individuate\n* **N+1 Query:** Nel ciclo `foreach (\$users as \$user)` viene richiamato `\$user->posts`, generando query multiple per ogni utente. Usa l'Eager Loading (`User::with('posts')->get()`).\n* **Mancanza di Validation:** Il parametro `\$request->all()` viene passato direttamente al model senza validazione preliminare.\n\n#### 🛠️ Codice Refactorizzato\n```php\n// Esempio di codice ottimizzato...\n```",
        'thumbnail' => 'uploads/7bk2irHNxWzHUmeiteo7shw9oHh6MgvrE2WMLfrs.jpg',
        'copy_count' => rand(25, 150),
        'is_featured' => 1,
    ],
    (object) [
        'title' => 'SEO Content Strategist & Blog Writer',
        'description' => 'Generatore di articoli di blog completi, strutturati e ottimizzati per i motori di ricerca. Include la ricerca dell\'intento di ricerca dell\'utente, la pianificazione della struttura H2/H3, l\'integrazione naturale delle parole chiave e la creazione di meta tag personalizzati.',
        'content' => "Agisci come un esperto di Content Marketing e SEO Copywriting con oltre 10 anni di esperienza. Devo scrivere un articolo di blog altamente approfondito ed esaustivo sul seguente argomento: [INSERISCI_ARGOMENTO].\n\nTarget di pubblico: Professionisti tech e sviluppatori web.\nKeyword principale: [INSERISCI_KEYWORD]\nKeyword secondarie: [KEYWORD_2, KEYWORD_3]\n\nCrea un articolo di almeno 1200 parole, includendo un'introduzione ingaggiante, sezioni H2 e H3 ben distinte, elenchi puntati per facilitare la lettura e una conclusione con una Call to Action chiara.",
        'instructions' => "1. Inserisci sempre un Meta Title e una Meta Description all'inizio dell'output.\n2. Utilizza la sintassi Markdown per la formattazione di intestazioni, elenchi e testo in grassetto.\n3. Mantieni un tono di voce autorevole ma accessibile.\n4. Includi un box \"Key Takeaways\" all'inizio dell'articolo.\n5. Evita frasi riempitive o introduzioni generiche; entra subito nel vivo dell'argomento.",
        'output_type' => 'markdown',
        'output_content' => "# Guida Completa all'Ottimizzazione di Laravel e Vite\n\n**Meta Title:** Come ottimizzare Laravel e Vite per performance da record\n**Meta Description:** Scopri le migliori strategie per configurare Vite in Laravel e ridurre i tempi di caricamento del tuo front-end.\n\n---\n\n### 🚀 Key Takeaways\n* L'Eager Loading evita i colli di bottiglia nel database.\n* La configurazione corretta degli alias in Vite riduce i tempi di build.\n...",
        'thumbnail' => 'uploads/7bk2irHNxWzHUmeiteo7shw9oHh6MgvrE2WMLfrs.jpg',
        'copy_count' => rand(10, 80),
        'is_featured' => 1,
    ],
    (object) [
        'title' => 'System Design & Database Schema Architect',
        'description' => 'Ingegnere di sistema virtuale per definire l\'architettura dati di nuove applicazioni web. Aiuta a modellare entità di database, definire relazioni (1:1, 1:N, N:M), progettare indici e scegliere la struttura di caching più idonea per scenari ad alto traffico.',
        'content' => "Sei un Software Architect esperto in database relazionali (PostgreSQL, MySQL) e NoSQL (Redis, MongoDB). Voglio progettare il database per il seguente sistema: [DESCRIVI_IL_TUO_PROGETTO].\n\nFornisci:\n1. Un elenco completo delle tabelle/collezioni necessarie con relativi campi, tipi di dato e vincoli (PK, FK, Unique).\n2. Le relazioni tra le entità spiegate chiaramente.\n3. Suggerimenti sugli indici da creare per ottimizzare le query di lettura più frequenti.\n4. Strategia di caching raccomandata per alleggerire il carico sul DB.",
        'instructions' => "1. Presenta la struttura del database sotto forma di tabelle Markdown ed eventuale codice SQL di migrazione.\n2. Giustifica brevemente la scelta dei tipi di dato per i campi chiave.\n3. Considera la scalabilità a lungo termine e le strategie di soft delete o audit log se pertinenti.",
        'output_type' => 'code',
        'output_content' => "```sql
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

CREATE TABLE prompts (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
```",
        'thumbnail' => 'uploads/7bk2irHNxWzHUmeiteo7shw9oHh6MgvrE2WMLfrs.jpg',
        'copy_count' => rand(5, 40),
        'is_featured' => 0,
    ],
    (object) [
        'title' => 'UX/UI Design Review & Tailwind Component Spec',
        'description' => 'Un assistant dedicato a designer e sviluppatori front-end. Analizza i requisiti di interfaccia utente, fornisce feedback sull\'usabilità e genera snippet di componenti HTML reattivi e accessibili formattati con Tailwind CSS.',
        'content' => "Agisci come un Lead UI/UX Designer e Front-End Engineer esperto in Tailwind CSS e accessibilità (WCAG 2.1). Devo realizzare il seguente componente/interfaccia: [INSERISCI_REQUISITI_UI].\n\nFornisci:\n1. Un'analisi UX/UI del layout consigliato (gerarchia visiva, spaziatura, contrasto cromatico).\n2. Il codice HTML pronto all'uso formattato esclusivamente con classi utility Tailwind CSS.\n3. Supporto nativo per la modalità scura (dark mode) e la reattività mobile-first.",
        'instructions' => "1. Il codice deve essere semanticamente corretto (`<article>`, `<header>`, `<button>`, ecc.).\n2. Utilizza attributi aria-label opportuni per garantire l'accessibilità.\n3. Non utilizzare CSS custom o style inline; affidati esclusivamente a Tailwind CSS.",
        'output_type' => 'code',
        'output_content' => "```html
<div class=\"max-w-sm rounded-2xl overflow-hidden shadow-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 p-5 transition-all hover:shadow-xl\">
  <h3 class=\"text-xl font-bold text-slate-900 dark:text-white mb-2\">Card Title</h3>
  <p class=\"text-slate-600 dark:text-slate-300 text-sm leading-relaxed mb-4\">
    Questo è un esempio di componente card reattivo costruito con Tailwind CSS.
  </p>
  <button class=\"w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 px-4 rounded-xl transition-colors duration-200 focus:ring-2 focus:ring-indigo-500 focus:outline-none\">
    Azione Principale
  </button>
</div>
```",
        'thumbnail' => 'uploads/7bk2irHNxWzHUmeiteo7shw9oHh6MgvrE2WMLfrs.jpg',
        'copy_count' => rand(50, 200),
        'is_featured' => 1,
    ]
];

return $realPrompts;