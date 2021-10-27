const vuejsApp = new Vue({
    el: '#app',
    data: {
        name: 'Mohammad Wasim',
        mobile: "01922002381",
        email: 'wasim.html@gmail.com',
        forloop : [
            { value: "ABC" },
            { value: "DEF" },
            { value: "GHI" },
            { value: "JKL" },
            { value: "MNO" }
        ]
    },
    methods: {
        testFunc: function(){
            let a = 5, b=6, c=0;
            c = a+b;
            return 'A and B Sum value is ' + c;
        }

    }
  })