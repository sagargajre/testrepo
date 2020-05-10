var homeListTemplate = Handlebars.compile($('#home_list_template').html());
var dashboardTemplate = Handlebars.compile($('#dashboard_template').html());
var Home = {
    run: function () {
        this.router = new this.Router();
        this.listview = new this.listView();
    }
};
Home.Router = Backbone.Router.extend({
    routes: {
        'home': 'renderList',
        '': 'renderList'
    },
    renderList: function () {
        Home.listview.listPage();
    },
});
Home.listView = Backbone.View.extend({
    el: 'div#main_container',
    listPage: function () {
        var templateData = {};
        templateData.name = tempNameInSession;
        if (tempTypeInSession == SUPER_ADMIN || tempTypeInSession == ADMIN) {
            templateData.is_admin = ADMIN;
        } else
        if (tempTypeInSession == owner) {
            templateData.is_company = owner;
        } else
        if (tempTypeInSession == tenant) {
            templateData.is_contractor = tenant;
        } else
        if (tempTypeInSession == CONTRACTOR) {
            templateData.is_labour_dept = LABOUR_DEPT;
        }
        if (tempTypeInSession == SUPER_ADMIN || tempTypeInSession == ADMIN || tempTypeInSession == DEPUTY_COLLECTOR || tempTypeInSession == LABOUR_DEPT) {
            templateData.is_show_dashboard = true;
        }
        this.$el.html(homeListTemplate(templateData));
        this.loadDashboardData(templateData);
    },
    loadDashboardData: function (templateData) {
        $('#dashboard_container').html(dashboardTemplate(templateData));
        getDashboardData();
    }
});