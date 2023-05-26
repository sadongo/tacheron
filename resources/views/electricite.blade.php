
@extends('layouts.header')

@section('title')
  Electricité
@endsection
@section('content')
    <style>
        .star
        {
            font-size: 1.5rem
        }

        .hover {
            color: rgb(225, 196, 0);
        }

    </style>

<h1 style="color:brown">Notation test</h1>
<i class="star" data-note="1">&#9733;</i>
<i class="star" data-note="2">&#9733;</i>
<i class="star" data-note="3">&#9733;</i>
<i class="star" data-note="4">&#9733;</i>
<i class="star" data-note="5">&#9733;</i>
<i class="note">Note:</i>

<script>
    const stars = document.querySelectorAll('.star');
    let check = false;
    stars.forEach(star => {
        star.addEventListener('mouseover', selectStars);
        star.addEventListener('mouseleave', unselectStars);
        star.addEventListener('click', activeSelect);

    })

    function selectStars(e) {
        const data = e.target;
        const etoiles = priviousSiblings(data);
        if(!check) {
            etoiles.forEach(etoile => {
                etoile.classList.add('hover');
            })
        }
    }

function unselectStars(e) {
    const data = e.target;
    const etoiles = priviousSiblings(data);
if(!check){
    etoiles.forEach(etoile => {
        etoile.classList.remove('hover');
    })
}
}

function activeSelect(e) {
check = true;
document.querySelector('.note').innerHTML+=''+e.target.dataset.note
}

function priviousSiblings(data) {
    let values = [data];
    while (data = data.priviousSiblings) {
 if (data.nodeName === 'I') {
    values.push(data);
 }
     }
   return values;
}

</script>
 <h2>SADONGO Sonia</h2>
 @endsection





   {{-- <div class="bg-white py-24 sm:py-32">
        <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
          <div class="max-w-2xl">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Electriciens disponibles</h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
          </div>
          <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
            <li>
              <div class="flex items-center gap-x-6">
                <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <div>
                  <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">KINDA Chris</h3>
                  <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                </div>
              </div>
            </li>

            <!-- More people... -->
          </ul>
        </div>
      </div> --}}





