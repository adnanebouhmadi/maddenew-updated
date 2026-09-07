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
                <a href="#" @click.prevent="currentPage = 'welcome'" class="hover:text-stone-900 transition-colors">Home</a>
                <a href="{{ route('collection') }}" class="hover:text-stone-900 transition-colors">Collection</a>
                <a href="#" class="hover:text-stone-900 transition-colors">About</a>
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
                <span class="uppercase tracking-[0.3em] text-sm mb-4 block">New Arrivals 2027</span>
                <h2 class="serif text-6xl md:text-8xl mb-8">Elevate Your Space</h2>
                <button class="bg-white text-stone-900 px-10 py-4 font-medium hover:bg-stone-100 transition-all rounded-full">
                    Explore Modern Classics
                </button>
            </div>
        </section>

        <!-- Product Grid -->
        <section class="max-w-7xl mx-auto px-6 py-20">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <h3 class="serif text-4xl text-stone-800">Curated Decor</h3>
                    <p class="text-stone-500 mt-2">Handpicked pieces for a sophisticated.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <template x-for="product in products" :key="product.id">
                    <div class="group cursor-pointer">
                        <div class="relative aspect-[3/4] overflow-hidden bg-stone-100 rounded-lg mb-4">
                            <img :src="product.img" :alt="product.name" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-stone-900/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            <button @click="buyProduct(product)" class="absolute bottom-4 left-4 right-4 bg-white/90 backdrop-blur py-3 text-sm font-semibold translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-300">
                                QUICK BUY
                            </button>
                        </div>
                        <h4 class="text-stone-800 font-medium" x-text="product.name"></h4>
                        <p class="text-stone-500" x-text="'$' + product.price + '.00'"></p>
                    </div>
                </template>
            </div>
        </section>
    </main>

    <main x-show="currentPage === 'buy'" x-cloak x-transition.opacity.duration.400ms class="bg-stone-50 min-h-screen py-12">
        <div class="max-w-4xl mx-auto px-6">
            <button @click="currentPage = 'welcome'" class="flex items-center gap-2 text-stone-500 hover:text-stone-800 mb-8 transition-colors">
                <i class="fa-solid fa-arrow-left text-xs"></i> Back to Shop
            </button>

            <div class="grid md:grid-cols-2 gap-12 bg-white p-8 rounded-2xl shadow-sm border border-stone-100">
                <!-- Product Preview -->
                <div x-show="selectedProduct">
                    <img :src="selectedProduct?.img" class="w-full aspect-square object-cover rounded-xl mb-6 shadow-md" alt="Selected product">
                    <h2 class="serif text-3xl text-stone-800 mb-2" x-text="selectedProduct?.name"></h2>
                    <p class="text-2xl text-stone-600 mb-4" x-text="'$' + selectedProduct?.price + '.00'"></p>
                    <div class="text-sm text-stone-400 space-y-2">
                        <p><i class="fa-solid fa-truck-fast mr-2"></i> Free Express Shipping</p>
                        <p><i class="fa-solid fa-shield-halved mr-2"></i> 2 Year Warranty</p>
                    </div>
                </div>

                <!-- Checkout Form -->
                <div>
                    <h3 class="text-lg font-semibold text-stone-800 mb-6 uppercase tracking-wider">Checkout Details</h3>
                    <form @submit.prevent="alert('Thank you for your order from Maddenew!')" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-stone-500 uppercase mb-1">Full Name</label>
                            <input type="text" required class="w-full border-stone-200 border p-3 rounded focus:ring-1 focus:ring-stone-400 outline-none transition-all" placeholder="John Doe">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-500 uppercase mb-1">Email Address</label>
                            <input type="email" required class="w-full border-stone-200 border p-3 rounded focus:ring-1 focus:ring-stone-400 outline-none transition-all" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-stone-500 uppercase mb-1">Shipping Address</label>
                            <textarea required class="w-full border-stone-200 border p-3 rounded focus:ring-1 focus:ring-stone-400 outline-none transition-all" rows="3" placeholder="123 Decor Lane..."></textarea>
                        </div>
                        
                        <div class="pt-4 border-t border-stone-100 mt-6">
                            <div class="flex justify-between text-stone-500 mb-2">
                                <span>Subtotal</span>
                                <span x-text="'$' + selectedProduct?.price + '.00'"></span>
                            </div>
                            <div class="flex justify-between text-stone-500 mb-4">
                                <span>Shipping</span>
                                <span class="text-green-600 font-medium">FREE</span>
                            </div>
                            <div class="flex justify-between text-xl font-bold text-stone-900 mb-6">
                                <span>Total</span>
                                <span x-text="'$' + selectedProduct?.price + '.00'"></span>
                            </div>
                            <button type="submit" class="w-full bg-stone-900 text-white py-4 font-bold hover:bg-stone-800 transition-all rounded-lg uppercase tracking-widest shadow-lg shadow-stone-200">
                                Confirm Purchase
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

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