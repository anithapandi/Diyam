(function() {

			render = function(templateId, data, parentElement) {
				var compiledTemplate =  _.template($("#" + templateId + "").html());
				var template = compiledTemplate(data);
				parentElement.html(template);
			},

			renderTimeLine = function() {
				render("timeLineTemplate", timeLineDataList, $(".timeline"));
			},
			
			renderTimeLineContent = function(data) {
				render("timeLineContentTemplate", data, $(".timeLineContent"));
			}, 
			
			updateContent = function() {
				$(".timeLineYear").click(function() {
					var result = _.findWhere(timeLineDataList,{"year":$(this).attr("data-year")});
					render("timeLineContentTemplate", result, $(".timeLineContent"));
					
				});
			}

	renderTimeLine();
	renderTimeLineContent(timeLineDataList[0]);
	updateContent();
})();