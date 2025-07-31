<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
- Grid 2-3 colonnes
- Header compact

### Mobile (sm)
- Sidebar slide complète
- Panier overlay pleine largeur
- Grid 1-2 colonnes
- Header simplifié

## 🔧 Installation et utilisation

### 1. Démarrer le serveur de développement

```bash
# Terminal 1 - Serveur Laravel
php artisan serve

# Terminal 2 - Build assets (Vite + Tailwind)
npm run dev
```

### 2. Accéder à l'interface

- Interface POS complète : `http://localhost:8000/restaurant`
- Route existante : `http://localhost:8000/`

### 3. Fonctionnalités testables

#### Navigation
- [x] Clic sur icônes sidebar (desktop)
- [x] Menu hamburger (mobile)
- [x] Navigation catégories horizontale
- [x] Recherche produits (UI prête)

#### Panier
- [x] Ajout produits au panier
- [x] Modification quantités (+/-)
- [x] Calcul automatique totaux
- [x] Toggle Dine In / Take Away
- [x] Bouton Print Bills

#### Responsive
- [x] Resize fenêtre pour tester breakpoints
- [x] Overlay mobile panier/sidebar
- [x] Grid adaptatif produits

## 📊 Données de démonstration

### Produits Pizza (10 items)
- American Favorite - $4.87 - 18 disponibles
- Chicken Mushroom - $5.87 - 9 disponibles  
- Favorite Cheese - $6.57 - 7 disponibles
- Meat Lovers - $6.37 - 14 disponibles
- Super Supreme - $5.75 - 10 disponibles
- Ultimate Cheese - $4.27 - 8 disponibles
- Pepperoni Classic - $5.99 - 12 disponibles
- Veggie Delight - $4.99 - 6 disponibles
- BBQ Chicken - $6.87 - **0 disponible** (test stock épuisé)
- Hawaiian Special - $5.47 - 15 disponibles

### Panier préchargé
- Orange Juice x4 - $2.87
- American Favorite x1 - $4.87  
- Super Supreme x1 - $5.75
- Favorite Cheese x1 - $6.57
- **Total : $31.53** (TVA incluse)

## 🎯 Détails d'implémentation

### Alpine.js State Management

```javascript
// État global dans <body>
x-data="{
    cartOpen: false,
    sidebarOpen: false,
    currentOrder: '#907653',
    table: 'T1',
    cart: [...], // Items panier
    get cartTotal() { ... },
    get cartCount() { ... }
}"
```

### Composants Blade Props

```php
// product-card.blade.php
// Utilise directement Alpine data (pizza)

// cart-item.blade.php  
// Utilise Alpine loop item context

// category-nav.blade.php
@props(['categories' => [...]])

// sidebar.blade.php
// Pas de props, comportement fixe
```

### Tailwind Classes principales

```css
/* Layout */
.lg:ml-20        /* Décalage sidebar desktop */
.w-80           /* Largeur panier fixe */
.fixed          /* Positionnement sidebar/panier */

/* Grid responsive */
.grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4

/* Animations */
.transition-all .duration-200
.hover:shadow-md .hover:bg-orange-600
.group-hover:opacity-100

/* Mobile overlays */
.z-40 .z-50     /* Z-index layers */
.translate-x-full /* Slide animations */
```

## 🚀 Prochaines étapes possibles

### Fonctionnalités à ajouter
- [ ] **Recherche produits** fonctionnelle
- [ ] **Filtre par catégorie** dynamique  
- [ ] **Gestion stock** temps réel
- [ ] **Personnalisation produits** (taille, extras)
- [ ] **Historique commandes**
- [ ] **Mode sombre/clair**

### Améliorations techniques  
- [ ] **Laravel Livewire** pour réactivité serveur
- [ ] **API REST** pour données dynamiques
- [ ] **Notifications toast** pour actions utilisateur
- [ ] **Validation formulaires** côté client/serveur
- [ ] **Tests automatisés** (Feature/Unit tests)
- [ ] **Progressive Web App** (PWA)

### Optimisations performance
- [ ] **Lazy loading** images produits
- [ ] **Virtual scrolling** pour longues listes  
- [ ] **Cache Redis** pour données produits
- [ ] **Compression images** WebP/AVIF
- [ ] **Bundle splitting** JS/CSS

## 📋 Checklist validation

### ✅ Composants Blade requis
- [x] `<x-product-card>` - Carte produit ✓
- [x] `<x-cart-item>` - Item du panier ✓  
- [x] `<x-category-nav>` - Navigation catégories ✓
- [x] `<x-sidebar>` - Menu latéral ✓

### ✅ Layout exigences
- [x] Sidebar responsive ✓
- [x] Header avec recherche ✓
- [x] Zone produits en grid ✓  
- [x] Panier latéral fixe ✓

### ✅ Technologies
- [x] Laravel Blade ✓
- [x] Tailwind CSS ✓
- [x] Alpine.js pour interactivité ✓
- [x] Design responsive ✓

### ✅ Fidélité au modèle
- [x] Couleurs oranges principales ✓
- [x] Layout 3 colonnes (sidebar/content/cart) ✓
- [x] Cartes produits avec images ✓
- [x] Interface panier détaillée ✓
- [x] Navigation catégories horizontale ✓

---

**🎉 Interface Restaurant POS complètement implémentée !**

La solution respecte tous les critères demandés avec une architecture propre, des composants réutilisables et une expérience utilisateur fluide sur tous les appareils.