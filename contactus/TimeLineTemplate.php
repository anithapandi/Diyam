
<script type="text/template" id="timeLineTemplate">

<%
for(var i=0; i< timeLineDataList.length; i++)
{
%>
	
    <li>
        <label id="<%=timeLineDataList[i].year%>__year" class="timeLineYear" data-year="<%=timeLineDataList[i].year%>" ><%=timeLineDataList[i].year%></label>
        <div id="<%=timeLineDataList[i].year%>__year__contentHolder" style="background-color: lightblue;display:none;" class="timeLineContent col-md-7 offset-md-3">
        </div> 
    </li>

<%
}
%>
</script>


<script type="text/template" id="timeLineContentTemplate">
   
            <span style="color: darkorange;font-size: 20px;"><%=title%></span>
            <div><%=content%></div>
       
</script>