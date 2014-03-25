<div class="header">
			<div class="logo-wrap">
				<a href="index.php"><div class=""></div></a>
			</div>
						<ul class="mobile-yes">
				<a href="upload.php?folder=/"><li><div class="upload-button">Subir</div></li></a>
				<a href="#" onclick="showhide('new-folder'); return(false);"><li><div class="new-button">Nuevo Folder</div></li></a>
				<a href="#" onclick="showhide('move-file'); return(false);"><li><div class="move-button">Copiar</div></li></a>
				<a href="#" onclick="showhide('remove-file'); return(false);"><li><div class="remove-button">Remover</div></li></a>
			</ul>
			<ul id="nav-mobile" class="mobile-no">
				<li class="nav-ps-mobile"><a href="#"></a>
					<ul>
						<li><a href="upload.php?folder=/">Subir</a></li>
						<li><a href="#" onclick="showhide('new-folder'); return(false);">Nuevo Folder</a></li>
						<li><a href="#" onclick="showhide('move-file'); return(false);">Copiar</a></li>
						<li class="last"><a href="#" onclick="showhide('remove-file'); return(false);">Remover</a></li>
					</ul>
					<div class="clear"></div>
				</li>
			</ul>
			<form action="result.php?folder=/" method="POST" autocomplete="off">
				<input type="text" name="query" class="search-header" value="Search..." onblur="if(value=='') value = 'Search...'" onfocus="if(value=='Search...') value = ''"/>
			</form>
			<ul id="nav">
				<li class="nav-ps"><a href="#">medanny</a>
					<ul>
						<li><a href="useredit.php">Configuracion</a></li>
						<li class="last"><a href="process.php">Salir</a></li>
					</ul>
					<div class="clear"></div>
				</li>
			</ul>
		</div>
