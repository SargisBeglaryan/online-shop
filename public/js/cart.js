$(document).ready((function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$(".update-cart").change((function(t){t.preventDefault();var a=$(this);$.ajax({url:a.attr("data-route"),method:"patch",data:{id:a.parents("tr").attr("data-id"),quantity:a.parents("tr").find(".quantity").val()},success:function(t){window.location.reload()}})})),$(".remove-from-cart").click((function(t){t.preventDefault();var a=$(this);confirm("Are you sure want to remove?")&&$.ajax({url:a.attr("data-route"),method:"DELETE",data:{id:a.parents("tr").attr("data-id")},success:function(t){window.location.reload()}})}))}));