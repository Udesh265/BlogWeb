# BlogWeb
Blog web develop symfony framework
symfony new BlogSite

composer install

symfony server:start -d

composer require annotations

"laminas/laminas-code":"~4.5.0@dev",  <=== add this composer.json

composer install

composer req maker

symfony console make:controller TestsController <=== create controller

composer require twig <=== template like blade

composer require symfony/orm-pack   

composer require --dev symfony/maker-bundle

symfony console doctrine:database:create

extra
============
composer require --dev doctrine/doctrine-fixtures-bundle  <==== this is use for pull dummy data into db

composer require symfony/webpack-encore-bundle <==== for front end ui

Follwing steps for Tailwind css import
============================================

 npm install -D tailwindcss postcss-loader purgecss-webpack-plugin glob-all path  <=== for tailwind css install
 npx tailwindcss init -p 
 after
 /**
 //postcss.config.js file
let tailwindcss = require("tailwindcss");
module.exports = {
  plugins: [
    tailwindcss("./tailwind.config.js"),
    require("postcss-import"),
    require("autoprefixer"),
  ],
};
**/

webpack.config.js file
/**
.enablePostCssLoader((options) => {
    options.postcssOptions = {
      config: "./postcss.config.js",
    };
  });
**/

tailwinf.config.js  file
/**
module.exports = {
  content: [
    "./assets/**/*.{vue,js,ts,jsx,tsx}",
    "./templates/**/*.{html,twig}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

**/


 




