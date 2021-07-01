var app = new Vue(
    {
        el: '#app',
        data: {
            faqs: []
        },
        created: function() {
            axios
                .get('http://localhost/php-google-faq/server.php')
                .then(
                    res => {
                        // console.log(res);
                        this.faqs = res.data;
                    }
                )
                .catch(
                    err => {
                        console.log(err);
                    }
                );
        }
    }
);