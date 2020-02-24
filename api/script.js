// "bin": {
    // "discounts": "./index.js"
// }
#!/usr/bin/env node
// var program = require('commander');
// var shortid = require('shortid');
// var request = require('request');

console.log("Defining Function")
function CreateDiscount(){
  console.log("Calling API")
    // var discount = {
    //     name: '20% OFF',
    //     trigger: 'Code',
    //     type: 'Rate',
    //     rate: 20,
    //     maxNumberOfUsages: 1,
    //     code: shortid.generate()
    // }

    // request({
    //     url: "https://api.nal.usda.gov/fdc/v1/search?api_key=7GUOx04j8bMKCV8L2MQkgpyObr9fq6Ti5cq8WxQg\&generalSearchInput=Cheddar%20Cheese",
    //
    //     method: "GET",
    //     json: true,
    // }, function (error, response, body){
    //     console.log(response);
    // });
    url = "https://api.nal.usda.gov/fdc/v1/search?api_key=7GUOx04j8bMKCV8L2MQkgpyObr9fq6Ti5cq8WxQg&generalSearchInput=Cheddar%20Cheese"
    fetch(url)
    .then(function(data) {
      console.log(data)
      // Here you get the data to modify as you please
      })
    })
    .catch(function(error) {
      console.log("Cannot Fetch")      // If there is any error you will catch them here
    });
}

// program
//     .arguments('<number>')
//     .action(function(number) {
//         for(var i = parseFloat(number); i > 0; i--){
//             CreateDiscount();
//         }
//     })
//     .parse(process.argv);
//     console.log(""+)
