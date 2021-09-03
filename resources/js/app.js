require('./bootstrap');

require('alpinejs');

window.followActions = function() {
    return {
        show: true,

        followUser: async function (route) {
            const response = await axios.post(route, {})
                .catch(e => console.log(e));

            if (200 == response.status) {
                this.show = false;
            }
        }
    }
}
