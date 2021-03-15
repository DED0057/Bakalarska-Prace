### SET FOLDER TO WATCH + FILES TO WATCH + SUBFOLDERS YES/NO
	$watcher = New-Object System.IO.FileSystemWatcher
    ### PATH TO YOUR IMAGE DIRECTORY
	$watcher.Path = '.\wp-content\plugins\ajaxzoom\pic\360'
	$watcher.IncludeSubdirectories = $true
	$watcher.EnableRaisingEvents = $true
### DEFINE ACTIONS AFTER AN EVENT IS DETECTED
	$action = { $path = $Event.SourceEventArgs.FullPath.ToString()
                $changeType = $Event.SourceEventArgs.ChangeType
                $logline = "$(Get-Date), $changeType, $path"
                ### PATH TO LOG FILE
                Add-content ".\log.txt" -value $logline
				$subpath=$path.substring(1)
				Write-Host "C:\xampp\htdocs\baka-wp$subpath"
                Start-Process -FilePath '.\PSdroplet_baka.exe' -ArgumentList "C:\xampp\htdocs\baka-wp$subpath" -RedirectStandardError ".\SortError.txt" -NoNewWindow -Wait
				Start-Sleep -s 10
              }    
### DECIDE WHICH EVENTS SHOULD BE WATCHED 
    Register-ObjectEvent $watcher "Created" -Action $action
    Register-ObjectEvent $watcher "Changed" -Action $action
	
    while ($true) {sleep 5}