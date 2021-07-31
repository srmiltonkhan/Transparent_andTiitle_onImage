<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.bgTransparent {
  position: relative;
  margin: 0 auto;
}

.bgTransparent img {
  vertical-align: middle;
  width:100%;
  height: 300px;
  /* Add the blur effect */
/*  filter: blur(8px);
  -webkit-filter: blur(2px);*/
}
.bgTransparent .transparentTitle {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.4); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  height: 100%;
  padding: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.transparentTitle h1{
  border: 3px solid #f1f1f1;
}
</style>
</head>
<body>



<div class="bgTransparent">
  <img src="admin/img/banner/bg.jpg" alt="Transparent Image">
  <div class="transparentTitle">
    <h1>ABOUT KYNC</h1>
  </div>
</div>

</body>
</html>