# 🚀 Démarrage Rapide - Restaurant POS Interface

## 1. Installation des dépendances

```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances Node.js
npm install
```

## 2. Configuration de l'environnement

```bash
# Copier le fichier d'environnement
cp .env.example .env

# Générer la clé d'application
php artisan key:generate
```

## 3. Démarrage des services

### Terminal 1 - Serveur Laravel
```bash
php artisan serve
```

### Terminal 2 - Build Vite (Tailwind + Assets)
```bash
npm run dev
```

## 4. Accès aux interfaces

### 🎯 Interface POS Complete (Alpine.js)
```
http://localhost:8000/restaurant
```
- Interface complète avec Alpine.js
- Panier fonctionnel
- Données dynamiques

### 🧪 Interface Demo (Test)
```
http://localhost:8000/demo
```
- Interface de test avec boutons démo
- Fonctions de manipulation panier
- Instructions intégrées

### 📊 Interface Originale
```
http://localhost:8000/
```
- Interface Laravel existante
- Inchangée

## 5. Test des fonctionnalités

### Desktop (Navigateur normal)
1. ✅ **Sidebar fixe** - Icônes navigation à gauche
2. ✅ **Panier fixe** - Colonne droite avec items
3. ✅ **Hover effects** - Survol cartes produits
4. ✅ **Recherche** - Barre de recherche header
5. ✅ **Ajout panier** - Clic sur produits

### Mobile (DevTools ou mobile)
1. ✅ **Menu hamburger** - Bouton top-left
2. ✅ **Panier overlay** - Bouton panier header
3. ✅ **Sidebar slide** - Navigation mobile
4. ✅ **Grid responsive** - 1-2 colonnes
5. ✅ **Touch interactions** - Navigation tactile

## 6. Structure des composants

```
Components créés:
├── <x-sidebar>           ✅ Menu latéral responsive  
├── <x-product-card>      ✅ Cartes produits hover
├── <x-cart-item>         ✅ Items panier + contrôles
└── <x-category-nav>      ✅ Navigation catégories

Layout:
└── layouts/restaurant    ✅ Layout principal Alpine.js
```

## 7. Vérification rapide

### ✅ Checklist fonctionnalités
- [ ] Serveur Laravel fonctionne (port 8000)
- [ ] Vite build fonctionne (Tailwind CSS chargé)
- [ ] Interface `/restaurant` s'affiche correctement
- [ ] Sidebar desktop visible (icônes à gauche)
- [ ] Panier desktop visible (colonne droite)
- [ ] Produits en grid responsive
- [ ] Catégories horizontales cliquables
- [ ] Ajout produits au panier fonctionne
- [ ] Contrôles quantité +/- fonctionnent
- [ ] Calculs totaux se mettent à jour
- [ ] Mode mobile responsive (menu hamburger)

### 🐛 Debug si problème

#### CSS ne se charge pas
```bash
# Relancer Vite
npm run dev

# Vérifier Tailwind config
npx tailwindcss -i ./resources/css/app.css -o ./public/build/tailwind.css --watch
```

#### Alpine.js ne fonctionne pas
- Vérifier la console navigateur (F12)
- S'assurer que le CDN Alpine.js se charge
- Tester les x-data dans l'inspecteur

#### Interface cassée sur mobile
- Ouvrir DevTools (F12)
- Toggle device toolbar (Ctrl+Shift+M)
- Tester différentes tailles d'écran

## 8. Architecture technique

```
Frontend:
├── Tailwind CSS v4      → Styling utility-first
├── Alpine.js v3         → JS réactif léger  
├── Laravel Blade        → Templates serveur
└── Vite                 → Build moderne

Backend:
├── Laravel 11           → Framework PHP
├── Blade Components     → Composants réutilisables
└── Routes Web           → Navigation

Responsive:
├── Mobile First         → Design mobile prioritaire
├── Breakpoints TW       → sm, md, lg, xl
└── Overlays             → Mobile cart/sidebar
```

---

## 🎉 Interface prête !

L'interface Restaurant POS est complètement fonctionnelle avec tous les composants demandés et une expérience utilisateur optimisée pour tous les appareils.

**Liens rapides:**
- 🍕 Interface complète: http://localhost:8000/restaurant
- 🧪 Mode démo: http://localhost:8000/demo  
- 📖 Documentation: README.md