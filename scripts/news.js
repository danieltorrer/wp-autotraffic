"use strict";$(document).ready(function(){$(".news-button").click(function(n){n.preventDefault(),$("#news-modal").modal()}),$("#news-modal").on("shown.bs.modal",function(){menuOpened=!menuOpened}),$("#news-modal").on("hidden.bs.modal",function(){menuOpened=!menuOpened})});