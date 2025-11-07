# OKTA BENALDI

## Model + Migration + Controller + Resource ## 
-`php artisan make:model "---" -mcr`
## Membuat Controller
- `php artisan make:controller -r`
## Membuat Model
- `php artisan make:model " --- "`
## Membuat Tabel Database
- `php artisan make:migration "---_---_---"`
jalankan migrasi
-`php artisan migrate`
Ulang dari nol (DROP semua tabel → migrate)
-`php artisan migrate:fresh`

---

## Push ke GitHub

```bash
git add .
git commit -m "pesan commit"
git push
```

---

## Nama harus sama dengan daata base\

alt+shif+f untuk merapikan