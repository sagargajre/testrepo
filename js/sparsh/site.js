var siteListTemplate = Handlebars.compile($('#site_list_template').html())
var siteFormTemplate = Handlebars.compile($('#site_form_template').html());
var site = {
    run: function () {
        this.router = new this.Router();
        this.listview = new this.listView();
    }
};
site.Router = Backbone.Router.extend({
    routes: {
        'site': 'renderList',
        '': 'renderList'
    },
    renderList: function () {
        site.listview.listPage();
    },
});
site.listView = Backbone.View.extend({
    el: 'div#main_container',
    listPage: function () {
        var templateData = {};
        this.$el.html(siteListTemplate());
    },

    newsite: function (isEdit, site_data) {

       // $('#site_table_container').hide();
       $('#site_form_container').html(siteFormTemplate());

   },


});


