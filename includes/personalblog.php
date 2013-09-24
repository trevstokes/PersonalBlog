<?php
	if (session_id() == '') 
	{
		session_start();
	}
	
	function GetPosts($postid) 
	{
		try
		{
			global $title, $content, $datepub, $top, $bottom, $previous, $next;
			$top = false;
			$bottom = false;
			$dbh = new PDO('mysql:host=localhost;dbname=trevor19_personalblog', "trevor19_PBAdmin", "P&r$0n@lBl0g");
			$topPost = $dbh->query("SELECT * FROM _blogposts WHERE Published = '1' AND Public = '1' ORDER BY PostID DESC LIMIT 1;");
			if ($topPost->rowCount() > 0)
			{
				foreach($topPost as $row) 
				{
					$topid = $row["PostID"];
					if ($postid != null)
					{
						$getPost = $dbh->query("SELECT * FROM _blogposts WHERE Published = '1' AND Public = '1' AND PostID = '" . $postid . "' LIMIT 1;");
						if ($getPost->rowCount() > 0)
						{
							foreach($getPost as $row2)
							{
								if ($row2["PostID"] == $topid)
								{
									$top = true;
								}
								$title = $row2["Title"];
								$content = $row2["Content"];
								$datepub = $row2["DatePublished"];
								break;
							}
						}
						else
						{
							$top = true;
							$postid = $topid;
							$title = $row["Title"];
							$content = $row["Content"];
							$datepub = $row["DatePublished"];
						}
					}
					else
					{
						$top = true;
						$postid = $topid;
						$title = $row["Title"];
						$content = $row["Content"];
						$datepub = $row["DatePublished"];
					}
					if ($postid == "1")
					{
						$bottom = true;
					}
					if (!$bottom)
					{
						$getPost = $dbh->query("SELECT * FROM _blogposts WHERE Published = '1' AND Public = '1' AND PostID < '" . $postid . "' LIMIT 1;");
						if ($getPost->rowCount() > 0)
						{
							foreach($getPost as $row2)
							{
								$previous = $row2["PostID"];
								break;
							}
						}
						else
						{
							$bottom = true;
						}
					}
					if (!$top)
					{
						$getPost = $dbh->query("SELECT * FROM _blogposts WHERE Published = '1' AND Public = '1' AND PostID > '" . $postid . "' LIMIT 1;");
						if ($getPost->rowCount() > 0)
						{
							foreach($getPost as $row2)
							{
								$next = $row2["PostID"];
								break;
							}
						}
						else
						{
							$top = true;
						}
					}
					break;
				}
			}
			else
			{
				$failed = TRUE;
			}
			$dbh = null;
		}
		catch (PDOException $e)
		{
			$failed = TRUE;
			die();
		}
	}
?>