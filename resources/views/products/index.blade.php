<x-app-layout>
    <x-slot name="header">
        Liste des produits
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- component -->
                <div tabindex="0" class="focus:outline-none">
                    <!-- Remove py-8 -->
                    <div class="mx-auto container py-8">
                        <div class="grid grid-cols-4 grid-gap-4">
                            <!-- Card 1 avec une boucle des produits -->
                            @foreach($products as $product)
                            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                                <div>
                                    <img alt="person capturing an image" src="https://placekitten.com/640/360" tabindex="0" class="focus:outline-none w-full h-44" />
                                </div>
                                <div class="bg-white">
                                    <div class="flex items-center justify-between px-4 pt-4">

                                        <div class="bg-secondary py-1.5 px-6 rounded-full">
                                            <p tabindex="0" class="focus:outline-none text-xs text-white"> {{ $product->price }} </p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{ $product->name }}</h2>
                                        </div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{ $product->description }}</p>

                                        <div class="flex items-center justify-between py-4">
                                            <button class="bg-primary text-white p-2 rounded-sm">Ajouter au panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- Card 1 Ends -->
                            { !! $data->link() !! }

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>