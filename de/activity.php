<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Anmeldung fehlgeschlagen',
        'success' => 'Angemeldet',
        'password-reset' => 'Passwort zurückgesetzt',
        'reset-password' => 'Angefordfertes Passwort zurückgesetzt',
        'checkpoint' => 'Zwei-Faktor authentifizierung angefordert',
        'recovery-token' => 'Nutzt Zwei-Faktor widerherstellungs Token',
        'token' => 'Zwei-Faktor herausfortderung gelöst',
        'ip-blocked' => 'Anfrage von unverzeichneten IP-Addresse für :identifier blockiert',
        'sftp' => [
            'fail' => 'SFTP Anmeldung fehlgeschlagen',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-mail Addresse von :old zu :new geändert',
            'password-changed' => 'Passwort geändert',
        ],
        'api-key' => [
            'create' => 'Neuer API Key :identifier erstellt',
            'delete' => 'API key :identifier gelöscht',
        ],
        'ssh-key' => [
            'create' => 'SSH key :fingerprint zum Account hinzugefügt',
            'delete' => 'SSH key :fingerprint vom Account gelöscht',
        ],
        'two-factor' => [
            'create' => 'Zwei-Faktor-Authentifizierung aktiviert',
            'delete' => 'Zwei-Faktor-Authentifizierung deaktiviert',
        ],
    ],
    'server' => [
        'reinstall' => 'Server wurde neu installiert',
        'console' => [
            'command' => 'Führte ":command" auf dem Server aus',
        ],
        'power' => [
            'start' => 'Hat den Server gestartet',
            'stop' => 'Hat den Server gestoppt',
            'restart' => 'Hat den Server neu gestartet',
            'kill' => 'Hat den Server gekillt (force stop)',
        ],
        'backup' => [
            'download' => ':name Backup heruntergeladen',
            'delete' => ':name Backup gelöscht',
            'restore' => ':name Backup wiederhergestellt (gelöschte Files: :truncate)',
            'restore-complete' => 'Wiederherstellung der :name Backup fertig',
            'restore-failed' => 'Wiederherstellung der :name Backup fehlgeschlagen',
            'start' => 'Neuen Backup :name gestartet',
            'complete' => ':name Backup als fertig markiert',
            'fail' => ':name Backup als fehlgeschlagen markiert',
            'lock' => 'Locked the :name backup',
            'unlock' => 'Unlocked the :name backup',
        ],
        'database' => [
            'create' => 'Created new database :name',
            'rotate-password' => 'Password rotated for database :name',
            'delete' => 'Deleted database :name',
        ],
        'file' => [
            'compress_one' => 'Compressed :directory:file',
            'compress_other' => 'Compressed :count files in :directory',
            'read' => 'Viewed the contents of :file',
            'copy' => 'Created a copy of :file',
            'create-directory' => 'Created directory :directory:name',
            'decompress' => 'Decompressed :files in :directory',
            'delete_one' => 'Deleted :directory:files.0',
            'delete_other' => 'Deleted :count files in :directory',
            'download' => 'Downloaded :file',
            'pull' => 'Downloaded a remote file from :url to :directory',
            'rename_one' => 'Renamed :directory:files.0.from to :directory:files.0.to',
            'rename_other' => 'Renamed :count files in :directory',
            'write' => 'Wrote new content to :file',
            'upload' => 'Began a file upload',
            'uploaded' => 'Uploaded :directory:file',
        ],
        'sftp' => [
            'denied' => 'Blocked SFTP access due to permissions',
            'create_one' => 'Created :files.0',
            'create_other' => 'Created :count new files',
            'write_one' => 'Modified the contents of :files.0',
            'write_other' => 'Modified the contents of :count files',
            'delete_one' => 'Deleted :files.0',
            'delete_other' => 'Deleted :count files',
            'create-directory_one' => 'Created the :files.0 directory',
            'create-directory_other' => 'Created :count directories',
            'rename_one' => 'Renamed :files.0.from to :files.0.to',
            'rename_other' => 'Renamed or moved :count files',
        ],
        'allocation' => [
            'create' => 'Added :allocation to the server',
            'notes' => 'Updated the notes for :allocation from ":old" to ":new"',
            'primary' => 'Set :allocation as the primary server allocation',
            'delete' => 'Deleted the :allocation allocation',
        ],
        'schedule' => [
            'create' => 'Created the :name schedule',
            'update' => 'Updated the :name schedule',
            'execute' => 'Manually executed the :name schedule',
            'delete' => 'Deleted the :name schedule',
        ],
        'task' => [
            'create' => 'Created a new ":action" task for the :name schedule',
            'update' => 'Updated the ":action" task for the :name schedule',
            'delete' => 'Deleted a task for the :name schedule',
        ],
        'settings' => [
            'rename' => 'Renamed the server from :old to :new',
            'description' => 'Changed the server description from :old to :new',
        ],
        'startup' => [
            'edit' => 'Changed the :variable variable from ":old" to ":new"',
            'image' => 'Updated the Docker Image for the server from :old to :new',
        ],
        'subuser' => [
            'create' => 'Added :email as a subuser',
            'update' => 'Updated the subuser permissions for :email',
            'delete' => 'Removed :email as a subuser',
        ],
    ],
];
