import Vue from "vue";
import moment from "moment";

Vue.filter('money', money);
export function money(cents) {
    return new Intl.NumberFormat('en-US', { style: 'currency', currency: 'USD' }).format(cents / 100);
}

Vue.filter('date', date);
export function date(timestamp) {
    return moment.unix(timestamp).format('MMMM Do YYYY');
}

Vue.filter('dateFormat', dateFormat);
export function dateFormat(dateString) {
    return moment(dateString).format('MMMM Do YYYY');
}
