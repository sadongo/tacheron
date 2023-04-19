
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .star
        {
            font-size: 1.5rem
        }

        .hover {
            color: rgb(225, 196, 0);
        }

    </style>
</head>
<body>

<h1>Notation test</h1>
<i class="star">&#9733;</i>
<i class="star">&#9733;</i>
<i class="star">&#9733;</i>
<i class="star">&#9733;</i>
<i class="star">&#9733;</i>

<script>
    const stars = document.querySelectorAll('.star');
    stars.forEach(star => {
star.addEventListener('mouseover', selectStars);
star.addEventListener('mouseleave', unselectStars);
star.addEventListener('click', activeSelect);

    });

function selectStars(e) {
    const data = e.target;
    const etoiles=priviousSiblings(data);
    console.log(etoiles);
    etoiles.forEach(etoiles => {
        etoile.classList.add('hover');
    })

}

function unselectStars(e) {
    const data = e.target;
    const etoiles=priviousSiblings(data);
    console.log(etoiles);
    etoiles.forEach(etoiles => {
        etoile.classList.remove('hover');
    })
}

function activeSelect(e) {

}

function priviousSiblings(data) {
    let values = [data];
    while (data = data.priviousSiblings){
if (data.nodeName === 'I'){
    values.push(data);
}
     }
   return values;
}

</script>

</body>
</html>





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
      </div>
 --}}




