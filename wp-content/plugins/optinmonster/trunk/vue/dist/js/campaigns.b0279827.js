"use strict";(self["webpackChunkoptinmonster_wordpress_plugin_vue_app"]=self["webpackChunkoptinmonster_wordpress_plugin_vue_app"]||[]).push([[340],{71619:function(t,a,e){e.r(a),e.d(a,{default:function(){return m}});var s=function(){var t=this,a=t._self._c;return a("core-page",{staticClass:"omapi-campaign-table"},[a("h1",{staticClass:"wp-heading-inline"},[t._v("Campaigns")]),a("core-button",{staticClass:"omapi-add-new",attrs:{size:"small"},on:{click:function(a){return t.$modal.show("create-campaign-by-type")}}},[t._v("Add New")]),a("common-alerts",{attrs:{alerts:t.alerts}}),a("transition",{attrs:{name:"fade",mode:"out-in"}},[t.connected||t.isLoading?t.showNoCampaigns?a("campaigns-no-campaigns"):a("div",{staticStyle:{position:"relative"}},[a("campaigns-table-filters",{attrs:{"is-bulk":0<t.bulk.length,"action-key":t.actionKey},on:{setAction:t.setAction}}),a("campaigns-table",{attrs:{campaigns:t.campaignsToShow,"is-bulk":0<t.bulk.length,"action-key":t.actionKey,"is-refreshing":t.isRefreshing||t.isLoading},on:{setAction:t.setAction}}),t.isLoading?a("core-loading",{staticStyle:{position:"absolute",top:"128px",opacity:"0.2"}}):t._e()],1):a("campaigns-not-connected")],1),a("campaigns-modal-create-by-type")],1)},i=[],n=e(86080),o=e(27361),c=e.n(o),r=e(20629),h={beforeRouteLeave:function(t,a,e){"campaigns"!==c()(t,"meta.parent")&&"campaigns"!==c()(t,"name")&&this.updatePageVars(),e()},inheritAttrs:!1,data:function(){return{actionKey:"none"}},computed:(0,n.Z)((0,n.Z)((0,n.Z)((0,n.Z)((0,n.Z)({},(0,r.Se)(["connected","isFetched","shouldFetchUser"])),(0,r.Se)("campaigns",["campaignsWithSplits"])),(0,r.rn)(["alerts"])),(0,r.rn)("campaigns",["bulk","page","search","totalCampaignsCount"])),{},{isLoading:function(){return this.shouldFetchUser||this.$store.getters.isLoading("campaigns")},isRefreshing:function(){return this.$store.getters.isLoading("campaigns-refresh")},campaignsToShow:function(){return this.connected?this.campaignsWithSplits:[]},hasCampaigns:function(){return 0<this.totalCampaignsCount},showNoCampaigns:function(){return!this.hasCampaigns&&!this.isLoading&&this.isFetched("mainQuery")}}),watch:{$route:function(t){this.updatePageVars(t),this.refreshDashboard()["catch"]((function(){}))}},mounted:function(){this.setPageVars({page:this.$get("$route.params.campaignsPage",this.page),search:this.$get("$route.params.searchTerm",this.search)}),this.isLoading||this.initRequests(),this.$bus.$on("fetchedMe",this.initRequests)},beforeDestroy:function(){this.$bus.$off("fetchedMe",this.initRequests)},methods:(0,n.Z)((0,n.Z)({},(0,r.nv)("campaigns",["setPageVars","refreshDashboard","fetchRulesetData"])),{},{initRequests:function(){this.refreshDashboard()["catch"]((function(){})),this.fetchRulesetData()},setAction:function(t){this.actionKey=t},updatePageVars:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.setPageVars({page:c()(t,"params.campaignsPage",1),search:c()(t,"params.searchTerm","")})}})},u=h,p=e(1001),g=(0,p.Z)(u,s,i,!1,null,null,null),m=g.exports}}]);
//# sourceMappingURL=campaigns.b0279827.js.map