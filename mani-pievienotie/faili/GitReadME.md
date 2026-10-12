Šī pamācība paredzēta darbam ar **Git** un **GitHub** no pašiem pamatiem.

Tajā apskatīts:

* kas ir Git;
* kas ir GitHub;
* ar ko Git un GitHub atšķiras;
* kā pirmo reizi sākt izmantot Git ar `git init`;
* kā savienot lokālu projektu ar GitHub;
* kā izmantot `git clone`;
* kā veikt `add`, `commit`, `push`, `pull`;
* kā apskatīt izmaiņas un commit vēsturi;
* svarīgākās Git komandas.

---

# 1. Kas ir Git?

**Git** ir versiju kontroles sistēma.

Git ļauj:

* sekot projekta failu izmaiņām;
* saglabāt projekta izmaiņu vēsturi;
* izveidot projekta saglabāšanas punktus;
* atgriezties pie iepriekšējām projekta versijām;
* strādāt ar vairākiem projekta zariem jeb `branch`;
* sadarboties ar citiem izstrādātājiem.

Git darbojas uz tava datora.

Vienkāršoti:

```text
Git = projekta izmaiņu un versiju pārvaldība datorā
```

---

# 2. Kas ir GitHub?

**GitHub** ir tiešsaistes platforma, kurā var glabāt Git repozitorijus.

GitHub ļauj:

* saglabāt projektus internetā;
* koplietot projektus ar citiem;
* strādāt komandā;
* apskatīt commit vēsturi;
* izmantot branch;
* veidot Pull Request;
* glabāt projekta kodu attālināti.

Vienkāršoti:

```text
GitHub = vieta internetā, kur glabā Git projektus
```

---

# 3. Git un GitHub atšķirība

Git un GitHub nav viens un tas pats.

| Git                                   | GitHub                          |
| ------------------------------------- | ------------------------------- |
| Programma / versiju kontroles sistēma | Tiešsaistes platforma           |
| Darbojas uz datora                    | Darbojas internetā              |
| Saglabā commit lokāli                 | Glabā Git repository attālināti |
| Var izmantot bez interneta            | Parasti nepieciešams internets  |
| Var izmantot bez GitHub               | Izmanto Git repository          |

Vienkārša shēma:

```text
Dators
  ↓
 Git
  ↓
GitHub
```

---

# 4. Kas ir repository?

**Repository** jeb saīsināti **repo** ir projekta mape, kurai Git seko līdzi.

Piemēram:

```text
mans-projekts/
├── index.html
├── style.css
├── script.js
└── README.md
```

Kad projektā ir inicializēts Git, Git var sekot šo failu izmaiņām.

---

# 5. Local un Remote repository

Ir divi svarīgi jēdzieni.

## Local repository

Repository, kas atrodas tavā datorā.

```text
LOCAL REPOSITORY
Tavs dators
```

## Remote repository

Repository, kas atrodas attālināti, piemēram, GitHub.

```text
REMOTE REPOSITORY
GitHub
```

Savstarpējā darbība:

```text
LOCAL REPOSITORY
      ↓ git push
      ↑ git pull
REMOTE REPOSITORY
```

---

# 6. Git instalācijas pārbaude

Atver termināli.

Piemēram:

* VS Code Terminal;
* Windows Terminal;
* PowerShell;
* Git Bash.

Izpildi:

```bash
git --version
git -v
```

Ja Git ir instalēts, redzēsi kaut ko līdzīgu:

```text
git version 2.x.x
```

---

# 7. Git pirmreizējā konfigurācija

Pirmo reizi lietojot Git datorā, ieteicams norādīt savu vārdu un e-pastu.

## Lietotāja vārds

```bash
git config --global user.name "Vards Uzvards"
```

Piemērs:

```bash
git config --global user.name "Janis Berzins"
```

## E-pasts

```bash
git config --global user.email "email@example.com"
```

Ieteicams izmantot e-pastu, kas pievienots GitHub kontam.

---

# 8. Pārbaudīt Git konfigurāciju

```bash
git config --global --list
```

Rezultāts var būt:

```text
user.name=Janis Berzins
user.email=email@example.com
```

`--global` nozīmē, ka šie iestatījumi tiks izmantoti visos Git projektos šajā datorā.

---

# 9. Pirmais Git projekts ar git init

Pieņemsim, ka mums datorā jau ir projekta mape:

```text
git-pamati
```

Atver šo mapi VS Code.

Terminālī pārliecinies, ka atrodies pareizajā mapē.

Piemēram:

```text
C:\xampp\htdocs\git-pamati>
```

---

# 10. git init

Lai sāktu izmantot Git pašreizējā mapē:

```bash
git init
```

`git init` pārvērš parastu mapi par Git repository.

Git mapē izveido slēptu:

```text
.git
```

mapi.

Tajā Git glabā:

* repository konfigurāciju;
* commit vēsturi;
* branch informāciju;
* Git iekšējos datus.

Svarīgi:

```text
.git mapi nevajag manuāli dzēst.
```

---

# 11. git status

Pēc `git init` izmanto:

```bash
git status
```

Šī ir viena no svarīgākajām Git komandām.

Tā parāda:

* kurā branch pašlaik atrodies;
* jaunus failus;
* izmainītus failus;
* failus, kas sagatavoti commit;
* repository pašreizējo stāvokli.

Ja neesi pārliecināts, kas pašlaik notiek Git:

```bash
git status
```

ir laba pirmā komanda.

---

# 12. Untracked files

Ja esi izveidojis jaunu failu:

```text
index.html
```

Git var parādīt:

```text
Untracked files
```

Tas nozīmē:

Git redz failu, bet tas vēl nav sagatavots commit.

---

# 13. Git darba princips

Galvenais Git darba process:

```text
WORKING DIRECTORY
      ↓
   git add
      ↓
STAGING AREA
      ↓
 git commit
      ↓
LOCAL REPOSITORY
```

Vienkāršoti:

```text
Izmainu failu
↓
git add
↓
git commit
```

---

# 14. git add

Lai sagatavotu vienu failu commit:

```bash
git add index.html
```

Lai sagatavotu visas pašreizējās izmaiņas:

```bash
git add .
```

Punkts:

```text
.
```

nozīmē visas pašreizējās izmaiņas šajā projektā.

---

# 15. Pārbaudīt statusu pēc git add

```bash
git status
```

Tagad faili var būt sadaļā:

```text
Changes to be committed
```

Tas nozīmē:

šie faili ir sagatavoti nākamajam commit.

---

# 16. Kas ir staging area?

`git add` vēl nesaglabā izmaiņas Git vēsturē.

Tas tikai sagatavo izvēlētās izmaiņas nākamajam commit.

Tātad:

```text
git add
≠
git commit
```

---

# 17. git commit

Lai izveidotu commit:

```bash
git commit -m "Initial commit"
```

`commit` ir projekta saglabāšanas punkts Git vēsturē.

Commit satur:

* failu izmaiņas;
* autoru;
* datumu;
* commit nosaukumu;
* unikālu commit ID.

---

# 18. Commit nosaukumi

Pirmajam commit bieži izmanto:

```text
Initial commit
```

Turpmāk commit nosaukumam jāapraksta, kas tika izdarīts.

Labi piemēri:

```bash
git commit -m "Pievienota sākumlapa"
```

```bash
git commit -m "Izveidota reģistrācijas forma"
```

```bash
git commit -m "Izlabota autorizācijas kļūda"
```

Slikti piemēri:

```text
update
```

```text
test
```

```text
abc
```

```text
done
```

---

# 19. git log

Lai apskatītu commit vēsturi:

```bash
git log
```

Īsāks un pārskatāmāks variants:

```bash
git log --oneline
```

Piemērs:

```text
5f3a72b Pievienota sākumlapa
a193e52 Initial commit
```

---

# 20. git diff

Ja esi izmainījis failu, bet vēl neesi veicis `git add`, vari apskatīt izmaiņas:

```bash
git diff
```

Git parādīs:

```text
- vecā rinda
+ jaunā rinda
```

Tas palīdz pārbaudīt izmaiņas pirms commit.

---

# 21. Main branch

Galveno Git branch parasti sauc:

```text
main
```

Lai pārsauktu pašreizējo galveno branch uz `main`:

```bash
git branch -M main
```

---

# 22. GitHub repository izveidošana

Kad lokālajā projektā Git jau darbojas, GitHub izveido jaunu repository.

GitHub izvēlies:

```text
New repository
```

Piemēram:

```text
git-pamati
```

Ja lokālajā projektā jau ir commit, GitHub repository ieteicams izveidot tukšu.

Nevajag sākumā atzīmēt:

```text
Add a README file
```

Ja lokālais projekts jau satur savu vēsturi.

---

# 23. Lokāla projekta savienošana ar GitHub

GitHub repository nokopē HTTPS adresi.

Piemēram:

```text
https://github.com/username/git-pamati.git
```

Terminālī:

```bash
git remote add origin https://github.com/username/git-pamati.git
```

---

# 24. Kas ir origin?

`origin` parasti ir nosaukums attālinātajam repository.

Pārbaudīt savienojumu:

```bash
git remote -v
```

Rezultāts:

```text
origin  https://github.com/username/git-pamati.git
```

---

# 25. Pirmais push uz GitHub

Pirmajā reizē:

```bash
git push -u origin main
```

Šī komanda:

* nosūta lokālo `main` branch uz GitHub;
* sasaista lokālo `main` ar attālināto `main`.

Pēc tam turpmāk parasti pietiek:

```bash
git push
```

---

# 26. Pilna pirmās reizes secība ar git init

```bash
git init
git status
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin REPOSITORY_URL
git push -u origin main
```

---

# 27. Ikdienas Git darba process

Pirms darba:

```bash
git pull
```

Veic nepieciešamās izmaiņas projektā.

Tad:

```bash
git status
```

```bash
git add .
```

```bash
git commit -m "Apraksts"
```

```bash
git push
```

Galvenā secība:

```text
git pull
↓
DARBS
↓
git status
↓
git add .
↓
git commit
↓
git push
```

---

# 28. git push

```bash
git push
```

Nosūta lokālos commit uz attālināto repository.

Vienkāršoti:

```text
Dators → GitHub
```

---

# 29. git pull

```bash
git pull
```

Saņem jaunākās izmaiņas no attālinātā repository.

Vienkāršoti:

```text
Dators ← GitHub
```

Pirms darba kopīgā projektā ieteicams izmantot:

```bash
git pull
```

---

# 30. git clone

`git clone` izmanto tad, ja projekts jau eksistē GitHub un vēlies to pirmo reizi lejupielādēt savā datorā.

Piemērs:

```bash
git clone https://github.com/username/projekts.git
```

Git:

* lejupielādēs projekta failus;
* izveidos Git repository;
* lejupielādēs commit vēsturi;
* automātiski pievienos remote `origin`.

---

# 31. git init un git clone atšķirība

## git init

Izmanto, ja:

```text
projekts jau ir datorā
```

un vēlies sākt tam izmantot Git.

```bash
git init
```

## git clone

Izmanto, ja:

```text
projekts jau atrodas GitHub
```

un vēlies to lejupielādēt datorā.

```bash
git clone URL
```

Vienkāršoti:

```text
Jauns lokāls projekts
→ git init
```

```text
Esošs GitHub projekts
→ git clone
```

Svarīgi:

Pēc `git clone` nevajag vēlreiz izmantot:

```bash
git init
```

Jo `git clone` jau izveido Git repository.

---

# 32. Darbs pēc git clone

Piemērs:

```bash
git clone https://github.com/username/projekts.git
```

Ieiet mapē:

```bash
cd projekts
```

Atvērt VS Code:

```bash
code .
```

Pārbaudīt:

```bash
git status
```

Pēc tam ikdienas process ir tas pats:

```bash
git pull
git status
git add .
git commit -m "Apraksts"
git push
```

---

# 33. git branch

Lai apskatītu branch:

```bash
git branch
```

Piemērs:

```text
* main
```

Zvaigznīte:

```text
*
```

parāda pašreizējo branch.

---

# 34. Jauna branch izveidošana

```bash
git switch -c jauns-branch
```

Piemēram:

```bash
git switch -c login-page
```

Tas:

1. izveido jaunu branch;
2. uzreiz pārslēdzas uz to.

---

# 35. Pārslēgšanās starp branch

Uz `main`:

```bash
git switch main
```

Uz citu branch:

```bash
git switch login-page
```

---

# 36. git merge

Lai apvienotu branch ar pašreizējo branch:

```bash
git merge login-page
```

Piemēram:

```bash
git switch main
git merge login-page
```

Tas apvieno `login-page` izmaiņas ar `main`.

---

# 37. Merge conflict

Ja divi cilvēki vai divi branch ir mainījuši vienu un to pašu koda vietu, Git dažreiz nevar automātiski apvienot izmaiņas.

Tad rodas:

```text
Merge Conflict
```

VS Code var palīdzēt izvēlēties:

```text
Accept Current Change
Accept Incoming Change
Accept Both Changes
```

Pēc konflikta izlabošanas:

```bash
git add .
git commit -m "Atrisināts merge konflikts"
```

---

# 38. .gitignore

`.gitignore` ir fails, kurā norāda failus un mapes, kuras Git nedrīkst pievienot repository.

Piemērs:

```text
.env
node_modules/
vendor/
```

---

# 39. Kāpēc .gitignore ir svarīgs?

GitHub nevajadzētu publicēt:

* paroles;
* API atslēgas;
* tokenus;
* datubāzes paroles;
* slepenus konfigurācijas failus.

Īpaši svarīgi:

```text
.env
```

parasti nevajag publicēt GitHub.

---

# 40. git restore

Ja esi izmainījis failu un vēlies atmest lokālās, vēl necommitotās izmaiņas:

```bash
git restore index.html
```

Visām pašreizējām izmaiņām:

```bash
git restore .
```

Uzmanību:

Šī komanda var izdzēst nesaglabātās izmaiņas.

---

# 41. git remote -v

Parāda, ar kādu attālināto repository projekts ir savienots.

```bash
git remote -v
```

Piemēram:

```text
origin  https://github.com/username/projekts.git
```

---

# 42. git status pēc darba

Pēc:

```bash
git add .
git commit -m "Apraksts"
```

izmanto:

```bash
git status
```

Ja redzi:

```text
nothing to commit, working tree clean
```

tas nozīmē, ka pašlaik nav nesaglabātu izmaiņu.

---

# 43. Svarīgākās Git komandas

| Komanda                                | Ko dara                          |
| -------------------------------------- | -------------------------------- |
| `git --version`                        | Parāda Git versiju               |
| `git config --global user.name "..."`  | Iestata Git lietotāja vārdu      |
| `git config --global user.email "..."` | Iestata Git e-pastu              |
| `git init`                             | Inicializē Git pašreizējā mapē   |
| `git clone URL`                        | Lejupielādē esošu repository     |
| `git status`                           | Parāda repository stāvokli       |
| `git add fails`                        | Sagatavo vienu failu commit      |
| `git add .`                            | Sagatavo visas izmaiņas          |
| `git commit -m "..."`                  | Izveido commit                   |
| `git push`                             | Nosūta commit uz GitHub          |
| `git pull`                             | Saņem jaunākās izmaiņas          |
| `git log`                              | Parāda commit vēsturi            |
| `git log --oneline`                    | Parāda īsu commit vēsturi        |
| `git diff`                             | Parāda failu izmaiņas            |
| `git branch`                           | Parāda branch                    |
| `git branch -M main`                   | Pārsauc galveno branch uz `main` |
| `git switch branch`                    | Pārslēdzas uz citu branch        |
| `git switch -c branch`                 | Izveido jaunu branch             |
| `git merge branch`                     | Apvieno branch                   |
| `git remote add origin URL`            | Pievieno attālināto repository   |
| `git remote -v`                        | Parāda remote repository         |
| `git restore fails`                    | Atmet lokālās faila izmaiņas     |

---

# 44. Galvenās komandas, kas jāiegaumē sākumā

Nav nepieciešams uzreiz zināt visas Git komandas.

Sākumā svarīgākās ir:

```bash
git init
```

```bash
git status
```

```bash
git add .
```

```bash
git commit -m "Apraksts"
```

```bash
git push
```

```bash
git pull
```

```bash
git clone URL
```

---

# 45. Pirmā projekta pilns piemērs

Izveido projekta mapi un failu:

```text
git-pamati/
└── index.html
```

`index.html`:

```html
<h1>Mans pirmais Git projekts</h1>
```

Terminālī:

```bash
git init
```

```bash
git status
```

```bash
git add .
```

```bash
git status
```

```bash
git commit -m "Initial commit"
```

```bash
git branch -M main
```

GitHub izveido tukšu repository.

Tad:

```bash
git remote add origin https://github.com/username/git-pamati.git
```

Pārbaudi:

```bash
git remote -v
```

Nosūti projektu:

```bash
git push -u origin main
```

---

# 46. Otrās izmaiņas piemērs

Maini `index.html`:

```html
<h1>Mans pirmais Git projekts</h1>

<p>Mācos izmantot Git un GitHub.</p>
```

Pārbaudi izmaiņas:

```bash
git status
```

```bash
git diff
```

Sagatavo:

```bash
git add .
```

Izveido commit:

```bash
git commit -m "Pievienots projekta apraksts"
```

Nosūti:

```bash
git push
```

---

# 47. Projekta lejupielāde citā datorā

Ja repository jau atrodas GitHub:

```bash
git clone https://github.com/username/git-pamati.git
```

Tad:

```bash
cd git-pamati
```

```bash
code .
```

Pēc tam nav jāizmanto:

```bash
git init
```

Jo repository jau tika inicializēts ar `git clone`.

---

# 48. Ikdienas atgādne

## Pirms darba

```bash
git pull
```

## Pēc izmaiņām

```bash
git status
```

## Sagatavot izmaiņas

```bash
git add .
```

## Saglabāt Git vēsturē

```bash
git commit -m "Apraksts"
```

## Nosūtīt uz GitHub

```bash
git push
```

---

# 49. Īsā Git shēma

```text
GITHUB
   ↓
clone / pull
   ↓
LOKĀLAIS PROJEKTS
   ↓
veicam izmaiņas
   ↓
git status
   ↓
git add .
   ↓
git commit
   ↓
git push
   ↓
GITHUB
```

---

# 50. Svarīgi noteikumi

1. Pirms darba kopīgā repository izmanto:

```bash
git pull
```

2. Pirms commit pārbaudi:

```bash
git status
```

3. Commit nosaukumam jāapraksta izmaiņas.

4. Neievieto GitHub paroles un API atslēgas.

5. Izmanto `.gitignore`.

6. Veido commit regulāri.

7. Neizmanto komandas, kuru darbību nesaproti.

Īpaši uzmanīgi ar:

```bash
git reset --hard
```

un:

```bash
git push --force
```

Tās var izraisīt izmaiņu vai Git vēstures zudumu.

---

# Galvenais, kas jāatceras

## Ja projektu sāc datorā

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin REPOSITORY_URL
git push -u origin main
```

## Ja projekts jau atrodas GitHub

```bash
git clone REPOSITORY_URL
```

## Ikdienas darbs

```bash
git pull

# veicam izmaiņas

git status
git add .
git commit -m "Apraksts"
git push
```
