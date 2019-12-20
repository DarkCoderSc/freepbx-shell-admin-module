# FreePBX Shell Admin Module (Authenticated)

## Usage

Download the plugin / extension code from this Github Repository

`git clone https://github.com/DarkCoderSc/freepbx-shell-admin-module.git`

Create a compressed archive with whole files contained in the repository

`tar -czvf shell.tar.gz freepbx-shell-admin-module/.`

- Log to the FreePBX administrative panel.
- Go to menu `Admin > Module Admin`.
- Click `Upload modules` button.
- From upload form in Upload from hard Disk mode, chose your `shell.tar.gz` file and click `upload (From Hard Disk)`
- If successfull `Module uploaded successfully.` should now appear.
- Go back to `Admin > Module Admin`.
- Expand the module called `shell` and click `Install` button (it should be now toggled).
- On the same page, you can now click on `Process` button, aligned top right.
- On the new page click `Confirm` button. Wait for installation and click `Return` button.

A new menu item should now appear on `Admin` > `Shell` 

You now have PHP Code Execution / System Command Execution abilities from FreePBX.

You can ignore warnings. They don't affect the plugin.

## Mitigation:

- Dangerous PHP functions should be disabled.
- Have a very strong password for FreePBX administration.
- Check users privileges.
- Disable new admin extension upload (if possible?)
