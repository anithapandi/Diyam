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
			},
			
			changeFrameSource=function(){
				$(".port").click(function(){
					var id=$(this).attr("id");
					if(id=="portfolio"){						
						$("#pageLoader").attr("src","Portfolio.php");
						$("#pageLoader").show();
						$(".contact").hide();
					}
					else if(id=="Reso"){
						$("#pageLoader").attr("src","Resource.php");
						$("#pageLoader").show();
						$(".contact").hide();
					}
					else if(id=="contact"){
						$(".contact").show();
						$("#pageLoader").hide();
					}
					else if(id=="home"){
						$("#pageLoader").attr("src","index.php");
						$("#pageLoader").show();
						$(".contact").hide();
						
					}
				});
			}

	renderTimeLine();
	renderTimeLineContent(timeLineDataList[0]);
	updateContent();
	changeFrameSource();
})();