 {{-- Nothing in the world is as soft and yielding as water. --}}
 <div class="card bg-white shadow-lg overflow-hidden">
     <img class="object-cover object-center w-full h-48 mx-auto" src="{{ asset('storage/' . $product->photo_url) }}"
         alt="avatar">
     <div class="p-2">
         <div class="rounded-md p-2 hover:bg-gray-100">
             <h1 class="text-base font-semibold text-black leading-heading">
                 {{ $product->name }}</h1>
         </div>
         <div class="flex justify-end self-end mt-3">
             <button wire:click="$dispatch('confirm-deletion', {product_id: '{{ $product->id }}'})"
                 class="flex h-6 w-7 items-center justify-center rounded-md transition hover:bg-gray-100"><svg
                     width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                     class="text-concrete " role="img" aria-hidden="false" aria-labelledby="ltclid100_title ">
                     <title id="ltclid100_title">Delete</title>
                     <path fill-rule="evenodd" clip-rule="evenodd"
                         d="M6.83341 -0.000488281L6.47986 0.145958L5.14653 1.47929L5.00008 1.83284V3H0.5H0V4H0.5H2.00002L2.00008 15.4995L2.50008 15.9995H13.5001L14.0001 15.4995L14 4H15.5H16V3H15.5H11.0001V1.83284L10.8536 1.47929L9.5203 0.145958L9.16675 -0.000488281H6.83341ZM10.0001 3V2.03995L8.95964 0.999512H7.04052L6.00008 2.03995V3H10.0001ZM5.00008 4H3.00002L3.00008 14.9995H13.0001L13 4H11.0001H10.0001H6.00008H5.00008ZM7 7V7.5V11.5V12H6V11.5V7.5V7H7ZM10 7.5V7H9V7.5V11.5V12H10V11.5V7.5Z"
                         fill="currentColor"></path>
                 </svg>
             </button>
         </div>
     </div>
 </div>
