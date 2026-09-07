<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maddenew - Modern Decoration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Inter:wght@300;400;600&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #fdfbf7;
        }
        .serif { font-family: 'Playfair Display', serif; }
        
        [x-cloak] { display: none !important; }

        .product-card:hover .product-overlay {
            opacity: 1;
        }
    </style>
</head>
<body x-data="{ 
    currentPage: 'welcome', 
    selectedProduct: null,
    products: [
        { id: 1, name: 'Minimalist Ceramic Vase', price: 45, img: 'https://images.unsplash.com/photo-1581783898377-1c85bf937427?auto=format&fit=crop&q=80&w=800' },
        { id: 2, name: 'Golden Hour Lamp', price: 120, img: 'https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&q=80&w=800' },
        { id: 3, name: 'Abstract Wall Art', price: 85, img: 'https://images.unsplash.com/photo-1513519245088-0e12902e5a38?auto=format&fit=crop&q=80&w=800' },
        { id: 4, name: 'Velvet Accent Chair', price: 299, img: 'https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&q=80&w=800' }
    ],
    buyProduct(product) {
        this.selectedProduct = product;
        this.currentPage = 'buy';
        window.scrollTo(0,0);
    }
}">

    <nav class="sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-stone-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 @click="currentPage = 'welcome'" class="serif text-3xl font-bold tracking-tight cursor-pointer text-stone-800">MADDENEW</h1>
            <div class="flex gap-8 text-sm font-medium uppercase tracking-widest text-stone-600">
                <a href="{{ url('/') }}" class="hover:text-stone-900 transition-colors">Home</a>
                <a href="{{ route('collection') }}" class="hover:text-stone-900 transition-colors">New Collection</a>
                <a href="{{ url('/') }}" class="hover:text-stone-900 transition-colors">About</a>
            </div>
             <div class="flex items-center gap-5">
                    <a href="https://www.instagram.com/maddenew.1/" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-instagram hover:text-white transition-colors cursor-pointer"></i>  </a>
                    <a href="https://www.facebook.com/profile.php?id=61582393943514" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook hover:text-white transition-colors cursor-pointer"></i> </a>
                </div>
           
        </div>
    </nav>

    <main x-show="currentPage === 'welcome'" x-transition.opacity.duration.400ms>
        <!-- Hero Section -->
        <section class="relative h-[70vh] flex items-center justify-center overflow-hidden">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&q=80&w=1600" 
                 class="absolute inset-0 w-full h-full object-cover scale-105" alt="Interior decor">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="relative text-center text-white px-4">
                <span class="uppercase tracking-[0.3em] text-sm mb-4 block">New Collection 2027</span>
                <h2 class="serif text-6xl md:text-8xl mb-8">New Collection</h2>
                <button class="bg-white text-stone-900 px-10 py-4 font-medium hover:bg-stone-100 transition-all rounded-full">
                    Explore Modern Classics
                </button>
            </div>
        </section>

        <!-- Product Grid -->
        <!-- Product Grid -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <div class="flex justify-between items-end mb-12">
        <div>
            <h3 class="serif text-4xl text-stone-800">Curated Decor</h3>
            <p class="text-stone-500 mt-2">Handpicked pieces for a sophisticated.</p>
        </div>
    </div>

    <!-- شبكة من 3 أعمدة (3 مربعات) -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- المنتج الأول -->
           <a href="https://wa.me/212649354001?text=Bonjour,%20je%20souhaite%20commander%20:%20Logo" target="_blank" class="group block cursor-pointer">
        <div class="group cursor-pointer">
            <div class="aspect-square bg-stone-200 overflow-hidden rounded-lg mb-4">
                <!-- استبدل images/product1.jpg بمسار صورتك -->
                <img src="{{ asset('images/product1.jpeg') }}" alt="المنتج الأول" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <h4 class="text-lg font-medium text-stone-800">Logo a partir de :</h4>
            <p class="text-stone-500">350 DH</p>
        </div>
         </a>

        <!-- المنتج الثاني -->
          <a href="https://wa.me/212649354001?text=Bonjour,%20je%20souhaite%20commander%20:%20Neon" target="_blank" class="group block cursor-pointer">
        <div class="group cursor-pointer">
            <div class="aspect-square bg-stone-200 overflow-hidden rounded-lg mb-4">
                <img src="{{ asset('images/product2.jpeg') }}" alt="المنتج الثاني" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <h4 class="text-lg font-medium text-stone-800">Neon a partir de :</h4>
            <p class="text-stone-500">500 DH</p>
        </div>
         </a>


        <!-- المنتج الثالث -->
          <a href="https://wa.me/212649354001?text=Bonjour,%20je%20souhaite%20commander%20:%20Panneau" target="_blank" class="group block cursor-pointer">
        <div class="group cursor-pointer">
            <div class="aspect-square bg-stone-200 overflow-hidden rounded-lg mb-4">
                <img src="{{ asset('images/product3.jpeg') }}" alt="المنتج الثالث" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <h4 class="text-lg font-medium text-stone-800">Panneau a partir de</h4>
            <p class="text-stone-500">1500 DH</p>
        </div>
         </a>


    </div>
</section>
                <!-- Product Preview -->
                    <div class="text-center text-sm text-stone-400 space-y-2">
                        <p><i class="fa-solid fa-truck-fast mr-2"></i> Free Express Shipping</p>                    </div>
                </div>

                <!-- Checkout Form -->
               

    <footer class="bg-stone-900 text-stone-400 py-16 mt-20">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-12">
            <div>
                <h4 class="serif text-2xl text-white mb-6">MADDENEW</h4>
                <p class="text-sm leading-relaxed">Redefining modern living through artisanal decoration and timeless design since 2026.</p>
            </div>
            <div>
                <h5 class="text-white font-bold mb-6 uppercase text-xs tracking-widest">Connect</h5>
                <div class="flex gap-6 text-xl">
                    <a href="https://www.instagram.com/maddenew.1/" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-instagram hover:text-white transition-colors cursor-pointer"></i>  </a>
                    <a href="https://www.facebook.com/profile.php?id=61582393943514" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook hover:text-white transition-colors cursor-pointer"></i> </a>
                </div>
            </div>
            <div>
                <h5 class="text-white font-bold mb-6 uppercase text-xs tracking-widest">Newsletter</h5>
                <div class="flex">
                    <input type="email" placeholder="Your email" class="bg-stone-800 border-none p-3 w-full outline-none focus:ring-1 focus:ring-stone-600">
                    <button class="bg-white text-stone-900 px-4 font-bold text-xs uppercase">Join</button>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-6 mt-16 pt-8 border-t border-stone-800 text-xs text-center">
            &copy; 2026 Maddenew Decoration. All rights reserved By Adnane Bouhmadi.
        </div>
    </footer>

</body>
</html>