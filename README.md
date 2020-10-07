# RUU Cipta Kerja (PDF to Text)
Yes yes, you can read it on text file format in addition to the PDF format. Plus this repository contains the script that convert the PDF to text format.

### What is this?
I just convert the RUU Cipta Kerja (final) and RUU Cipta Kerja PDF version using pdftotext command on my Linux machine into plain text format with page separator. As a bonus, per page version also available on text format on the sub directories.

### Script available?
Yes, in this case I am using PHP script and `pdftotext` command. 

- `ruu_cipta_kerja_final.php` is for processing `ruu_cipta_kerja_final.pdf` and the output is `ruu_cipta_kerja_final.txt`
- `ruu_cipta_kerja.php` is for processing `BALEG-RJ-20200605-100224-2372.pdf` and the output is `BALEG-RJ-20200605-100224-2372.txt`

The `pdftotext` is available by installing these on Linux.

#### CentOS
```
yum install poppler-utils
```

#### Ubuntu
```
apt install poppler-utils
```

### Sources and references
- Link download final draft and before final at https://tirto.id/isi-uu-omnibus-law-cipta-kerja-pdf-link-download-usai-disahkan-dpr-f5BZ
- http://www.dpr.go.id/dokakd/dokumen/BALEG-RJ-20200605-100224-2372.pdf
- https://ekon.go.id/info-sektoral/15/6/dokumen-ruu-cipta-kerja
