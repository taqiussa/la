<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body x-data="{ active: 1 }" class="antialiased scroll-smooth">
    <section x-show="active == 1" x-transition:enter="transition duration-1000"
        x-transition:enter-start="transform -translate-y-full" x-transition:enter-end="transform translate-y-0"
        x-transition:leave="transition duration-1000" x-transition:leave-start="transform"
        x-transition:leave-end="transform -translate-y-full"
        class="max-w-md mx-auto border-2 border-pink-300 flex flex-col top-0 w-full h-screen bg-gradient-to-tr from-red-200 via-zinc-200 to-purple-300 p-5 justify-center items-center space-y-10">
        <div
            class="text-7xl font-semibold 
        bg-gradient-to-r bg-clip-text  text-transparent 
        from-purple-300 via-sky-200 to-fuchsia-300
        animate-text pr-20">
            Linda
        </div>
        <div @click="active = 2" id="backdrop" class="cursor-pointer flex flex-col items-center">
            <svg style="width: 60px; height: 60px "viewBox="0 0 24 24" class=' text-purple-300 animate-pulse'>
                <path fill="currentColor"
                    d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M9.75,7.82C8.21,7.82 7,9.03 7,10.57C7,12.46 8.7,14 11.28,16.34L12,17L12.72,16.34C15.3,14 17,12.46 17,10.57C17,9.03 15.79,7.82 14.25,7.82C13.38,7.82 12.55,8.23 12,8.87C11.45,8.23 10.62,7.82 9.75,7.82Z" />
            </svg>
            <div class="text-md text-purple-300 animate-bounce">
                Click Me
            </div>
        </div>
        <div
            class="text-7xl font-semibold 
        bg-gradient-to-r bg-clip-text  text-transparent 
        from-purple-300 via-sky-200 to-fuchsia-300
        animate-text pl-20">
            Arif
        </div>
    </section>
    <section x-show="active == 2" x-transition:enter="transition ease-in-out duration-1000"
        x-transition:enter-start="transform -translate-y-0" x-transition:enter-end="transform -translate-y-full"
        class="max-w-md mx-auto border-2 border-pink-1000 h-screen flex flex-col bg-gradient-to-bl from-indigo-400 via-zinc-100 to-rose-300 animate-text">
        <div @click="active = 1" id="header"
            class="flex-1top-0 sticky w-full backdrop-blur bg-white/60 grid grid-cols-3 gap-4">
            <div
                class="text-3xl font-bold 
                    bg-gradient-to-r bg-clip-text  text-transparent 
                    from-purple-300 via-sky-200 to-fuchsia-300
                    animate-text place-self-start pl-10">
                Linda
            </div>
            <div class="place-self-center">
                <svg style="width: 48px; height: 48px "viewBox="0 0 24 24"
                    class=' text-purple-300 animate-pulse cursor-pointer'>
                    <path fill="currentColor"
                        d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M9.75,7.82C8.21,7.82 7,9.03 7,10.57C7,12.46 8.7,14 11.28,16.34L12,17L12.72,16.34C15.3,14 17,12.46 17,10.57C17,9.03 15.79,7.82 14.25,7.82C13.38,7.82 12.55,8.23 12,8.87C11.45,8.23 10.62,7.82 9.75,7.82Z" />
                </svg>
            </div>
            <div
                class="text-3xl font-bold 
                    bg-gradient-to-r bg-clip-text  text-transparent 
                    from-purple-300 via-sky-200 to-fuchsia-300
                    animate-text place-self-end pr-20">
                Arif
            </div>
        </div>
        <div class="flex-grow overflow-y-auto p-3">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum officia aut porro explicabo ea? Possimus,
            temporibus nostrum laborum vero doloribus, accusamus dolores quod ab blanditiis quidem iste! Rerum ad saepe
            fugiat, ducimus ab, odio, tempore numquam est exercitationem soluta dignissimos. A, illo suscipit
            necessitatibus dolore similique reprehenderit recusandae quia nulla, impedit dolores odit quasi consectetur
            aspernatur molestias, eligendi unde eveniet labore? Ducimus explicabo iure officiis aliquam doloremque nam
            fugiat. Amet, laboriosam excepturi! Inventore, obcaecati repellendus. Eum dolorem harum doloremque minima
            perspiciatis consectetur eligendi numquam aliquam ratione, corrupti alias quam error ad explicabo. Esse id
            laudantium eveniet repudiandae veniam expedita accusamus, quaerat a illum eos, ratione quisquam earum. Earum
            nesciunt nemo fugiat id dolores officia deserunt. Quis repellat ad, corrupti a vel accusamus numquam nobis
            dolore omnis, expedita similique saepe laborum, nisi rem accusantium tempore quas maiores blanditiis nihil
            minima minus dolorem illo eum facere! At, architecto quidem laboriosam quae, error voluptatum obcaecati
            recusandae totam temporibus optio assumenda officiis veritatis! Praesentium minima, dignissimos corporis
            tempore culpa non, reiciendis natus voluptatibus, quo ex consequatur id veritatis deleniti ut. Nobis harum
            ut autem, quo deleniti natus itaque facere explicabo nisi! Quos inventore minima dicta distinctio. Commodi
            modi quas eligendi eaque autem eveniet ea?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor aspernatur qui soluta voluptatibus amet unde
            earum, quod saepe illo consequatur.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti dolorum voluptate illum vitae, esse iusto
            ipsam molestiae. Numquam quisquam ullam quam quaerat quibusdam! Iste eum incidunt veritatis ipsum vel,
            facilis sequi cumque at nostrum maiores? Quos neque dolor aspernatur cumque accusantium, laudantium porro
            beatae adipisci tempora doloremque libero expedita vel veritatis debitis hic ea corporis perspiciatis maxime
            dolorem quaerat quia atque, eligendi impedit dolore? Error dolore fugit nesciunt rem labore eveniet vitae
            facere tempora corporis voluptatum architecto cum dignissimos, inventore soluta vero voluptatibus maiores
            delectus. Fugit ad, pariatur deleniti ut, adipisci corrupti consequuntur libero quos et nihil voluptates, a
            labore asperiores harum natus blanditiis id ullam. Similique labore, perferendis unde fuga recusandae
            eveniet voluptatem illum voluptate quae distinctio, dolorem fugit a tempore minima laborum nihil asperiores
            placeat cupiditate. Facilis tempore sint labore ipsum quis explicabo eveniet eos sapiente atque impedit
            aliquid aperiam ratione adipisci, aspernatur suscipit voluptatem doloribus ea quisquam maxime cum.
            Consectetur perspiciatis laboriosam corrupti nihil optio. Culpa sunt itaque quam reiciendis recusandae non
            facilis velit optio corrupti qui odio quisquam quaerat et expedita, deserunt molestias placeat natus
            voluptate, dolorum eveniet sint harum labore? Sequi distinctio repudiandae ratione autem excepturi
            necessitatibus debitis, quas incidunt facere molestias, veniam omnis sunt.
        </div>

        <div id="footer"
            class="sticky flex-1 w-full bottom-0 flex justify-between border-t-2 border-emeral-400 px-7 py-1 backdrop-blur bg-white/60">
            <div>
                <svg style="width:36px;height:36px" viewBox="0 0 24 24" class="text-purple-300">
                    <path fill="currentColor"
                        d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
                </svg>
            </div>
            <div>
                <svg style="width:36px;height:36px" viewBox="0 0 24 24" class="text-purple-300">
                    <path fill="currentColor"
                        d="M21 11.11V5C21 3.9 20.11 3 19 3H14.82C14.4 1.84 13.3 1 12 1S9.6 1.84 9.18 3H5C3.9 3 3 3.9 3 5V19C3 20.11 3.9 21 5 21H11.11C12.37 22.24 14.09 23 16 23C19.87 23 23 19.87 23 16C23 14.09 22.24 12.37 21 11.11M12 3C12.55 3 13 3.45 13 4S12.55 5 12 5 11 4.55 11 4 11.45 3 12 3M5 19V5H7V7H17V5H19V9.68C18.09 9.25 17.08 9 16 9H7V11H11.1C10.5 11.57 10.04 12.25 9.68 13H7V15H9.08C9.03 15.33 9 15.66 9 16C9 17.08 9.25 18.09 9.68 19H5M16 21C13.24 21 11 18.76 11 16S13.24 11 16 11 21 13.24 21 16 18.76 21 16 21M16.5 16.25L19.36 17.94L18.61 19.16L15 17V12H16.5V16.25Z" />
                </svg>
            </div>
            <div>
                <svg style="width: 36px; height: 36px "viewBox="0 0 24 24"
                class=' text-purple-300 animate-pulse cursor-pointer'>
                <path fill="currentColor"
                    d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M12,4A8,8 0 0,1 20,12A8,8 0 0,1 12,20A8,8 0 0,1 4,12A8,8 0 0,1 12,4M9.75,7.82C8.21,7.82 7,9.03 7,10.57C7,12.46 8.7,14 11.28,16.34L12,17L12.72,16.34C15.3,14 17,12.46 17,10.57C17,9.03 15.79,7.82 14.25,7.82C13.38,7.82 12.55,8.23 12,8.87C11.45,8.23 10.62,7.82 9.75,7.82Z" />
            </svg>
            </div>
            <div>
                <svg style="width:36px;height:36px" viewBox="0 0 24 24" class="text-purple-300">
                    <path fill="currentColor"
                        d="M4 6H2V20C2 21.11 2.9 22 4 22H18V20H4V6M18.5 14.25C18.5 12.75 15.5 12 14 12S9.5 12.75 9.5 14.25V15H18.5M14 10.25C15.24 10.25 16.25 9.24 16.25 8S15.24 5.75 14 5.75 11.75 6.76 11.75 8 12.76 10.25 14 10.25M20 2H8C6.9 2 6 2.9 6 4V16C6 17.11 6.9 18 8 18H20C21.11 18 22 17.11 22 16V4C22 2.89 21.1 2 20 2M20 16H8V4H20V16Z" />
                </svg>
            </div>
            <div>
                <svg style="width:36px;height:36px" viewBox="0 0 24 24" class="text-purple-300">
                    <path fill="currentColor"
                        d="M12 3C6.5 3 2 6.58 2 11C2.05 13.15 3.06 15.17 4.75 16.5C4.75 17.1 4.33 18.67 2 21C4.37 20.89 6.64 20 8.47 18.5C9.61 18.83 10.81 19 12 19C17.5 19 22 15.42 22 11S17.5 3 12 3M12 17C7.58 17 4 14.31 4 11S7.58 5 12 5 20 7.69 20 11 16.42 17 12 17M17 12V10H15V12H17M13 12V10H11V12H13M9 12V10H7V12H9Z" />
                </svg>
            </div>
        </div>
    </section>
</body>

</html>
