(function(){
	
			render	=	function(templateId, data, parentClass)
						{
							var template = _.template($("#"+templateId+"").html(), data);
							
							$("."+parentClass).html(template);
							
						},
				
	renderTimeLine	=	function()
						{
							render("timeLineTemplate",timeLineDataList,"timeline");
						},
	renderTimeLineContent = function(data)
							{
								var compiledTemplate = _.template($("#timeLineContentTemplate").html());
								var template = compiledTemplate(data);
								
								$("#"+data.year+"__year__contentHolder").html(template).show();
								
								
							},
		updateContent	=	function()
							{
								$(".timeLineYear").click(function(e){
									$(".timeLineContent").hide();
									renderTimeLineContent(_.findWhere(timeLineDataList, {year: $(this).attr("data-year")}));
									
								});
							}
						
	renderTimeLine();
	renderTimeLineContent(timeLineDataList[0]);
	updateContent();
})();