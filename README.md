1. Clone the repository from GitHub.

```bash
git clone [repository link]
```

2. Install **VS Code**.

```bash
winget install vscode
```

2.1. Install **Git**.

```bash
winget install git.git -i
```
Add Git Bash, set VS Code as the default editor, and make sure Git uses `main`, not `master`.

2.2. Install **PHP**.

```bash
winget install PHP.PHP.8.5
```
*Tip: Use `winget search php` to check for newer versions.*

3. Install **Bun**.

```bash
powershell -c "irm bun.sh/install.ps1|iex"
```

3.1. Restart the terminal if prompted.

4. Install **Composer** from:
   https://getcomposer.org/download/

5. Open the project folder.

```bash
cd [name of the cloned repository]
```

6. Find `php.ini`.

```bash
where php
```

6.1. Open `php.ini` in VS Code and enable `fileinfo` on line **921**:

```ini
extension=fileinfo
```
Remove the `;` if there is one.

7. Install PHP dependencies.

```bash
composer install
```

7.1. Restart the terminal if prompted.

8. Install Bun dependencies.

```bash
bun install
```
*Tip: `bun i` works too.*

9. Create `.env` by copying `.env.example`.

10. Generate the application key.

```bash
php artisan key:generate
```
This adds a random key to `.env` under `APP_KEY`.

11. Run the database migrations.

```bash
php artisan migrate
```
This updates the database structure.

11.1. If asked to create the SQLite database, select **Yes**.

12. Start the development server.

```bash
composer run dev
```
This starts the required local development services.