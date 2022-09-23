
## Bundling Assets on Laravel Vite

Vite is now the default module bundler for new Laravel projects. Its best feature is an incredibly fast development server with Hot Module replacement.

- Create a new Laravel App
```
$ composer create-project laravel/laravel my-project
$ cd my-project
```
- Lets install Tailwind CSS
```
$ npm install -D tailwindcss postcss autoprefixer
$ npx tailwindcss init -p
```
- Configure you tailwind.config.js
```
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
``` 
- Add the Tailwind directives to your CSS
```
@tailwind base;
@tailwind components;
@tailwind utilities;
```
- loading your scripts and styles, go to welcome blade and remove style and add this on head tag:
```
    <!doctype html>
    <head>
        {{--  --}}
    
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
```
- Start your build process
```
$ npm run dev
```
- let's make a test, replace body with this:
```
    <body>
        <div class="w-full py-8 text-center">
            <h1 class="text-4xl font-bold text-amber-400">
                Hello, Vite!
            </h1>
        </div>
    </body>
```
- all set!, check the app in a browser, use valet, or anything that you use for that, or just run:
```
$ php artisan serve
```
- (IN CASE) lets add SASS, open a terminal and run:
```
$ npm add -D sass
```
- go to resources and add a folder name scss and create a file with name app.scss, copy this inside:
```
    $color-primary: #FF5722;
    $color-secondary: #ffca28;
    $color-theme: #282c34;

    body {
        background-color:$color-theme;
    }
    h2 {
        color:$color-primary;

        span {
            color: $color-secondary;
        }
    }
```
- add the scss to vite.config.js
```
    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';

    export default defineConfig({
        plugins: [
            laravel({
                input: ['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
        ],
    });
```
- add scss to vite on welcome blade on head tag
```
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
```
- on the body add a h3 tag with text for example:
```
    <body>
        <div class="w-full py-8 text-center">
            <h1 class="text-4xl font-bold text-amber-400">
                Hello, Vite!
            </h1>
            <h3>Welcome <span>SASS</span></h3>
        </div>
    </body>
```
- run dev
```
$ npm run dev
```
- check browser.
- (IN CASE) you need VUE:
```
$ npm i -D vue@next 
$ npm i -D @vitejs/plugin-vue
```
- go to vite.config and add Vue
```
    import { defineConfig } from 'vite';
    import laravel from 'laravel-vite-plugin';
    import vue from '@vitejs/plugin-vue';

    export default defineConfig({
        plugins: [
            laravel({
                input: ['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'],
                refresh: true,
            }),
            vue({
                template: {
                    transformAssetUrls: {
                        base: null,
                        includeAbsolute: false,
                    },
                },
            }),
        ],
    });

```
- go to js folder on resources and create a component folder with a file ExampleComponent.vue, add this code for testing:
```
    <template>
        <div class="vueText">
            This is an Example Vue 3 SFC!!...
        </div>
    </template>

    <script setup>
        import { onMounted } from 'vue';

        onMounted(()=> {
            console.log('Mounted Vue 3 SFC')
        })
    </script>

    <style scoped>
        .vueText {
            color: white;
            padding-top: 20px;
        }

    </style>

```
- import and create vue app on app.js
```
    import { createApp } from 'vue/dist/vue.esm-bundler';
    import ExampleComponent from './components/ExampleComponent.vue'

    // Vue Init
    createApp({
        components: {
            ExampleComponent,
        }
    }).mount('#app');
```
- go to welcome blade and add vue:
```
    <body>
        <div id="app">
            <div class="w-full py-8 text-center">
                <h1 class="text-4xl font-bold text-amber-400">
                    Hello, Vite!
                </h1>
                <h2>Welcome <span>SASS</span></h2>
                <example-component />
            </div>
        </div>
    </body>
```
- all set, run dev again and check the app on browser. 

<br/>
<br/>
<br/>

Happy Coding!  :computer:  See you all! Bye  👋 <br />
**[Fidel Duran](https://fidelduran.com)** 

<p align="center"><a href="https://fidelduran.com" target="_blank"><img width="150" src="https://fidelduran.com/images/logos/logo-yellow.svg"></a></p>
