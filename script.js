const products = [
  { id: 1, title: 'STARCROOS', price: 500000, qty: 1, image: 'bg9.jpg' },
  { id: 2, title: 'STARCROOS', price: 500000, qty: 1, image: 'bg11.jpg' },
  { id: 3, title: 'T-S - STARCROOS', price: 300000, qty: 1, image: 'pic16.jpg' },
  { id: 4, title: 'T-S - STARCROOS', price: 300000, qty: 1, image: 'pic18.jpg' },
  { id: 5, title: 'THRASHER', price: 100000, qty: 1, image: 'bg4.jpg' },
  { id: 6, title: 'THRASHER', price: 100000, qty: 1, image: 'bg5.jpg' },
  { id: 7, title: 'VANS SLIP ON BLK/WHT', price: 1000000, qty: 1, image: 'bg25.jpg' },
  { id: 8, title: 'DOCMART', price: 1000000, qty: 1, image: 'bg22.jpg' }
];

function formatNumber(n, c, d, t) {
  var c = isNaN(c = Math.abs(c)) ? 2 : c,
    d = d === undefined ? '.' : d,
    t = t === undefined ? ',' : t,
    s = n < 0 ? '-' : '',
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
    j = (j = i.length) > 3 ? j % 3 : 0;
  return s + (j ? i.substr(0, j) + t : '') + i.substr(j).replace(/(\d{3})(?=\d)/g, '$1' + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : '');
}

Vue.filter('formatCurrency', function (value) {
  return formatNumber(value, 2, '.', ',');
});

Vue.component('shopping-cart', {
  props: ['items'],

  computed: {
    Total: function () {
      var total = 0;
      this.items.forEach(item => {
        total += (item.price * item.qty);
      });
      return total;
    }
  },

  methods: {
    removeItem(index) {
      this.items.splice(index, 1);
    }
  }
});

const vm = new Vue({
  el: '#app',

  data: {
    cartItems: [],
    items: products
  },

  methods: {
    checkout: function (event) {
      console.log("Checkout");
      initCheckout();
    },
    addToCart(itemToAdd) {
      var found = false;

      // Check if the item was already added to cart
      // If so them add it to the qty field
      this.cartItems.forEach(item => {
        if (item.id === itemToAdd.id) {
          found = true;
          item.qty += itemToAdd.qty;
        }
      });

      if (found === false) {
        this.cartItems.push(Vue.util.extend({}, itemToAdd));
      }

      itemToAdd.qty = 1;
    }
  }
});


