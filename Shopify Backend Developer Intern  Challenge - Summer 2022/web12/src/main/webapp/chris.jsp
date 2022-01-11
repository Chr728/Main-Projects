<!-- Author christina Darstbanian , this is the page that needs to be run in order to see the requirements -->

<%@ page import="web12.*"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}
	
	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}
	
	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	</style>
	<head>
	<meta charset="UTF-8">
	<title>Web Application</title>
	 
	
	</head>

	<body>
	
       
	
		<form action="chris.jsp" method="POST">
			<label>Name of the item </label> <input type="text" id="name" name="name"><br>
			<br> <label>Quantity of the item</label> <input type="number" id="quantity"
				name="quantity"><br>
			<br> <input type="submit" value="Add an item to the List">
			
		</form>
	<br><br>
		<!-- Insert, Delete and Update  functions are called respectively   -->
		<%  
		
			if(request.getParameter("quantity") != null && request.getParameter("name") !=null && !request.getParameter("quantity").isEmpty()){  
				list.insertitem(Integer.parseInt(request.getParameter("quantity")), request.getParameter("name"));
				
			}
			
			
			
			if((request.getParameter("removeID") != null )){
				list.deletetitem(Integer.parseInt(request.getParameter("removeID")));	
			} 
			
			
			if((request.getParameter("updatedID") != null  && !request.getParameter("updatedQuantity").isEmpty())){
				list.updateitem(Integer.parseInt(request.getParameter("updatedID")),
						Integer.parseInt(request.getParameter("updatedQuantity")), request.getParameter("updatedName"));
			}
			
			if((request.getParameter("exportCSV") != null )){
				list.exportCSV();	
			}
			
			if((request.getParameter("updateID") != null )){
					%>
					<form action="chris.jsp" method="POST">
						<input type="hidden" name="updatedID" id="updatedID" value="<%out.print(request.getParameter("updateID"));%>">
						<label>Name</label> <input type="text" id="updatedName" name="updatedName" value="<%out.print(request.getParameter("updateName"));%>"><br>
						<label>Quantity</label> <input type="number" id="updatedQuantity" name="updatedQuantity" value="<%out.print(request.getParameter("updateQuantity"));%>"><br>
						<input type="submit" value="update">
					</form>
		<!-- below is to display the items as a list ( being the last CRUD requirement)  -->
					<%
			} else {
		
				for( int i=0; i <list.items.size(); i++){%>
					<div class="table">
						<div class="td">
						
						    <form action="chris.jsp" method="POST" >
						    <ul>
						    	<li><span class="td"><%out.print("Name of the item:  " + list.items.get(i).getName());%> </span>
						         
						    <span class="td" style="margin-left:0.5%;"> <%out.print("Quantity: " +list.items.get(i).getQuantity());%></span>
						    	<input class="td" type="hidden" name="removeID" id="removeID" value="<%out.print(list.items.get(i).getId());%>">
						    	</ul><br>
						        <input class="td" type="submit" value="Remove this item" >
						       
						    </form>
				
						    <form class="td" action="chris.jsp" method="POST">
						    	<input class="td" type="hidden" name="updateID" id="updateID" value="<%out.print(list.items.get(i).getId());%>">
						    	<input class="td" type="hidden" name="updateName" id="updateName" value="<%out.print(list.items.get(i).getName());%>">
						    	<input class="td" type="hidden" name="updateQuantity" id="updateQuantity" value="<%out.print(list.items.get(i).getQuantity());%>">
						        <input class="td" type="submit" value="Update this item"> 
						    </form> 
						  
						    
						     
					    </div>
					</div>
						
				<%}
			}%>
		<form action="chris.jsp" method="POST" style = "margin-top:3%;">
			<input type="hidden" id="exportCSV" name="exportCSV"> 
			<input type="submit"  value="Export Product Data To CSV">
		</form>
	</body>
</html>
