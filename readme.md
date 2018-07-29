# README #
Steps needed to get application up and running

### What is this repository for? ###
# `ModeStreet back-end challenge` 

* Challenge is to build a product add, edit, delete, view and list/search api's.
* Description: 	An application where the User’s can register with email and password. 
*				User have to login using there registered email and password to get API Token 
*				Product add, edit. delete, view and list/search api's can be used with the API Token
*
*				The Products table have required fields name. image url, available sizes, price and category.
*               Here, Name is kept unique and all other fields are compulsory.
*               Url should be valid URL.
*
* Version       1.0

### How do I get set up? ###

* Clone the repository, Run migration.
* Create .env file from copying .env.example, generate key and add database username, password and database name.
* Install all dependcies to run Laravel 5.6 refer(https://laravel.com/docs/5.6/installation).
* Run (Composer Install) for install all Packages.
* Create a database and add the name in .env file.
* Create a virtual host and point it into /public folder under the project.
* Give appropiate permission to storage and the bootstrap/cache directories.

### Who do I talk to? ###

* Repo owner : Ashis Gupta
* Contact Email : agupta.rkl@gmail.com



### Postman Import Raw Text ###



{"id":"7f40f9e9-e13e-41c1-87d2-67abdff16449","name":"ModeStreet Assignment API","description":"Product CRUD","auth":null,"events":null,"variables":[],"order":["f75318c8-6acd-4c20-bb7c-e2df7e4aac79","aacbf268-d9ff-46e5-9b77-ffd94a4663bd","fe7efb90-d0e8-448a-a7ee-b78ce5c9f003","c2272d8b-37b3-4b91-9b6e-53c83f885f14","a6e7f4b1-6344-4eb3-9a55-96c4bceba500","4d632025-62ed-4375-b290-19006fa50b53","7667694a-2617-4ca4-ba69-1fbe146e86d1","9a212ac1-cbbd-40bf-99d5-831ce2836037","6dee7bd8-af36-4043-956b-81913747aef6"],"folders_order":[],"folders":[],"requests":[{"id":"4d632025-62ed-4375-b290-19006fa50b53","name":"http:\/\/modestreet.local.com\/api\/logout","url":"http:\/\/modestreet.local.com\/api\/logout","description":"Logout User","data":[{"key":"email","value":"agupta.rkl@gmail.com","description":"","type":"text","enabled":true},{"key":"password","value":"12345678","description":"","type":"text","enabled":true},{"key":"api_token","value":"iDW1fyzAd2orT8zRMC5ynVSiaMLu5DZPFP74QT8Up1QJwtzfY7hehthagAFJ","description":"","type":"text","enabled":true}],"dataMode":"params","headerData":[{"key":"Accept","value":"application\/json","description":"","enabled":true},{"key":"Content-Type","value":"application\/json","description":"","enabled":true}],"method":"POST","pathVariableData":[],"queryParams":[],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Accept: application\/json\nContent-Type: application\/json\n","pathVariables":[]},{"id":"6dee7bd8-af36-4043-956b-81913747aef6","name":"http:\/\/modestreet.local.com\/api\/products\/2?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","url":"http:\/\/modestreet.local.com\/api\/products\/2?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"Delete Product","data":null,"dataMode":"params","headerData":[{"key":"Content-Type","value":"application\/json","description":"","enabled":true},{"key":"Accept","value":"application\/json","description":"","enabled":true}],"method":"DELETE","pathVariableData":[],"queryParams":[{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","equals":true,"description":"","enabled":true}],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Content-Type: application\/json\nAccept: application\/json\n","pathVariables":[]},{"id":"7667694a-2617-4ca4-ba69-1fbe146e86d1","name":"http:\/\/modestreet.local.com\/api\/products\/1","url":"http:\/\/modestreet.local.com\/api\/products\/1","description":"Update a Product","data":[{"key":"name","value":"New Puma Men Black Solid ACTIVE Pique Polo T-shirt","description":"","type":"text","enabled":true},{"key":"image","value":"https:\/\/assets.myntassets.com\/h_640,q_90,w_480\/v1\/assets\/images\/6706341\/2018\/6\/12\/252f54dd-20b2-494b-91fc-e91cfc5aabda1528791494030-Puma-Men-Tshirts-7611528791493706-1.jpg","description":"","type":"text","enabled":true},{"key":"available_sizes","value":"M. L, XL, XLL","description":"","type":"text","enabled":true},{"key":"price","value":"1499","description":"","type":"text","enabled":true},{"key":"category","value":"Tshirts","description":"","type":"text","enabled":true},{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"","type":"text","enabled":true},{"key":"method_","value":"PATCH","description":"","type":"text","enabled":false}],"dataMode":"urlencoded","headerData":[{"key":"Accept","value":"application\/json","description":"","enabled":true},{"key":"Content-Type","value":"application\/x-www-form-urlencoded","description":""}],"method":"PATCH","pathVariableData":[],"queryParams":[],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Accept: application\/json\nContent-Type: application\/x-www-form-urlencoded\n","pathVariables":[]},{"id":"9a212ac1-cbbd-40bf-99d5-831ce2836037","name":"http:\/\/modestreet.local.com\/api\/productsearch\/Puma?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","url":"http:\/\/restapi.local.com\/api\/productsearch\/Puma?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"Product Search","data":null,"dataMode":"params","headerData":[],"method":"GET","pathVariableData":[],"queryParams":[{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","equals":true,"description":"","enabled":true}],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"","pathVariables":[]},{"id":"a6e7f4b1-6344-4eb3-9a55-96c4bceba500","name":"http:\/\/modestreet.local.com\/api\/login","url":"http:\/\/modestreet.local.com\/api\/login","description":"Login User","data":[{"key":"email","value":"agupta.rkl@gmail.com","description":"","type":"text","enabled":true},{"key":"password","value":"12345678","description":"","type":"text","enabled":true},{"key":"","value":"","description":"","type":"text","enabled":false}],"dataMode":"params","headerData":[{"key":"Accept","value":"application\/json","description":"","enabled":true},{"key":"Content-Type","value":"application\/json","description":"","enabled":true}],"method":"POST","pathVariableData":[],"queryParams":[],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Accept: application\/json\nContent-Type: application\/json\n","pathVariables":[]},{"id":"aacbf268-d9ff-46e5-9b77-ffd94a4663bd","name":"http:\/\/modestreet.local.com\/api\/products","url":"http:\/\/modestreet.local.com\/api\/products?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"List all Products","data":[{"key":"name","value":"Puma Men Black Solid ACTIVE Pique Polo T-shirt","description":"","type":"text","enabled":true},{"key":"image","value":"https:\/\/assets.myntassets.com\/h_640,q_90,w_480\/v1\/assets\/images\/6706341\/2018\/6\/12\/252f54dd-20b2-494b-91fc-e91cfc5aabda1528791494030-Puma-Men-Tshirts-7611528791493706-1.jpg","description":"","type":"text","enabled":true},{"key":"available_sizes","value":"M. L, XL, XLL","description":"","type":"text","enabled":true},{"key":"price","value":"1499","description":"","type":"text","enabled":true},{"key":"category","value":"Tshirts","description":"","type":"text","enabled":true},{"key":"","value":"","description":"","type":"text","enabled":false}],"dataMode":"params","headerData":[{"key":"Content-Type","value":"application\/json","description":"","enabled":true},{"key":"Accept","value":"application\/json","description":"","enabled":true}],"method":"GET","pathVariableData":[],"queryParams":[{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","equals":true,"description":"","enabled":true}],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Content-Type: application\/json\nAccept: application\/json\n","pathVariables":[]},{"id":"c2272d8b-37b3-4b91-9b6e-53c83f885f14","name":"http:\/\/modestreet.local.com\/api\/register","url":"http:\/\/modestreet.local.com\/api\/register","description":"Register User","data":[{"key":"name","value":"AshisGupta","description":"","type":"text","enabled":true},{"key":"email","value":"agupta.rkl@gmail.com","description":"","type":"text","enabled":true},{"key":"password","value":"12345678","description":"","type":"text","enabled":true},{"key":"password_confirmation","value":"12345678","description":"","type":"text","enabled":true}],"dataMode":"params","headerData":[{"key":"Accept","value":"application\/json","description":"","enabled":true},{"key":"Content-Type","value":"application\/json","description":"","enabled":true}],"method":"POST","pathVariableData":[],"queryParams":[],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Accept: application\/json\nContent-Type: application\/json\n","pathVariables":[]},{"id":"f75318c8-6acd-4c20-bb7c-e2df7e4aac79","name":"http:\/\/modestreet.local.com\/api\/products","url":"http:\/\/modestreet.local.com\/api\/products","description":"Add Product","data":[{"key":"name","value":"Puma Men Black Solid ACTIVE Pique Polo T-shirt","description":"","type":"text","enabled":true},{"key":"image","value":"https:\/\/assets.myntassets.com\/h_640,q_90,w_480\/v1\/assets\/images\/6706341\/2018\/6\/12\/252f54dd-20b2-494b-91fc-e91cfc5aabda1528791494030-Puma-Men-Tshirts-7611528791493706-1.jpg","description":"","type":"text","enabled":true},{"key":"available_sizes","value":"M. L, XL, XLL","description":"","type":"text","enabled":true},{"key":"price","value":"1499","description":"","type":"text","enabled":true},{"key":"category","value":"Tshirts","description":"","type":"text","enabled":true},{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"","type":"text","enabled":true}],"dataMode":"params","headerData":[{"key":"Accept","value":"application\/json","description":"","enabled":true},{"key":"Content-Type","value":"application\/json","description":"","enabled":true}],"method":"POST","pathVariableData":[],"queryParams":[],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Accept: application\/json\nContent-Type: application\/json\n","pathVariables":[]},{"id":"fe7efb90-d0e8-448a-a7ee-b78ce5c9f003","name":"http:\/\/modestreet.local.com\/api\/products","url":"http:\/\/modestreet.local.com\/api\/products\/1?api_token=14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","description":"Get single product","data":[{"key":"name","value":"Puma Men Black Solid ACTIVE Pique Polo T-shirt","description":"","type":"text","enabled":true},{"key":"image","value":"https:\/\/assets.myntassets.com\/h_640,q_90,w_480\/v1\/assets\/images\/6706341\/2018\/6\/12\/252f54dd-20b2-494b-91fc-e91cfc5aabda1528791494030-Puma-Men-Tshirts-7611528791493706-1.jpg","description":"","type":"text","enabled":true},{"key":"available_sizes","value":"M. L, XL, XLL","description":"","type":"text","enabled":true},{"key":"price","value":"1499","description":"","type":"text","enabled":true},{"key":"category","value":"Tshirts","description":"","type":"text","enabled":true},{"key":"","value":"","description":"","type":"text","enabled":false}],"dataMode":"params","headerData":[{"key":"Content-Type","value":"application\/json","description":"","enabled":true},{"key":"Accept","value":"application\/json","description":"","enabled":true}],"method":"GET","pathVariableData":[],"queryParams":[{"key":"api_token","value":"14N4BupNJAL0nNXvkyp9IgKFou0ieqG8ztki0QnMskEiyg7gLYwLCSdy1Wg6","equals":true,"description":"","enabled":true}],"auth":null,"events":[],"folder":null,"currentHelper":null,"helperAttributes":null,"collectionId":"7f40f9e9-e13e-41c1-87d2-67abdff16449","headers":"Content-Type: application\/json\nAccept: application\/json\n","pathVariables":[]}]}

