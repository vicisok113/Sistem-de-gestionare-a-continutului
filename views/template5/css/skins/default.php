<?php
    $query = $this->db->query('SELECT * FROM general');
    foreach ($query->result() as $row)
    {
        $primaryc = $row->primaryc;
        $secondary = $row->secondary;
        $tertiary = $row->tertiary;
        $quaternary = $row->quaternary;
        /*
			<?=$primaryc?>
			<?=$secondary?>
			<?=$tertiary?>
			<?=$quaternary?>
        */
    }
?>
<style type="text/css">
a {
	color: <?=$primaryc?>;
}

a:hover {
	color: #0099e6;
}

a:focus {
	color: #0099e6;
}

a:active {
	color: #0077b3;
}

html .heading-primary,
html .lnk-primary,
html .text-color-primary {
	color: <?=$primaryc?> !important;
}

html .heading.heading-primary h1,
html .heading.heading-primary h2,
html .heading.heading-primary h3,
html .heading.heading-primary h4,
html .heading.heading-primary h5,
html .heading.heading-primary h6 {
	border-color: <?=$primaryc?>;
}

html .heading-secondary,
html .lnk-secondary,
html .text-color-secondary {
	color: <?=$secondary?> !important;
}

html .heading.heading-secondary h1,
html .heading.heading-secondary h2,
html .heading.heading-secondary h3,
html .heading.heading-secondary h4,
html .heading.heading-secondary h5,
html .heading.heading-secondary h6 {
	border-color: <?=$secondary?>;
}

html .heading-tertiary,
html .lnk-tertiary,
html .text-color-tertiary {
	color: <?=$tertiary?> !important;
}

html .heading.heading-tertiary h1,
html .heading.heading-tertiary h2,
html .heading.heading-tertiary h3,
html .heading.heading-tertiary h4,
html .heading.heading-tertiary h5,
html .heading.heading-tertiary h6 {
	border-color: <?=$tertiary?>;
}

html .heading-quaternary,
html .lnk-quaternary,
html .text-color-quaternary {
	color: <?=$quaternary?> !important;
}

html .heading.heading-quaternary h1,
html .heading.heading-quaternary h2,
html .heading.heading-quaternary h3,
html .heading.heading-quaternary h4,
html .heading.heading-quaternary h5,
html .heading.heading-quaternary h6 {
	border-color: <?=$quaternary?>;
}

html .heading-dark,
html .lnk-dark,
html .text-color-dark {
	color: #2e353e !important;
}

html .heading.heading-dark h1,
html .heading.heading-dark h2,
html .heading.heading-dark h3,
html .heading.heading-dark h4,
html .heading.heading-dark h5,
html .heading.heading-dark h6 {
	border-color: #2e353e;
}

html .heading-light,
html .lnk-light,
html .text-color-light {
	color: #ffffff !important;
}

html .heading.heading-light h1,
html .heading.heading-light h2,
html .heading.heading-light h3,
html .heading.heading-light h4,
html .heading.heading-light h5,
html .heading.heading-light h6 {
	border-color: #ffffff;
}

html .background-color-primary {
	background-color: <?=$primaryc?> !important;
}

html .background-color-secondary {
	background-color: <?=$secondary?> !important;
}

html .background-color-tertiary {
	background-color: <?=$tertiary?> !important;
}

html .background-color-quaternary {
	background-color: <?=$quaternary?> !important;
}

html .background-color-dark {
	background-color: #2e353e !important;
}

html .background-color-light {
	background-color: #ffffff !important;
}

.alternative-font {
	color: <?=$primaryc?>;
}

html .blockquote-primary {
	border-color: <?=$primaryc?> !important;
}

html .blockquote-secondary {
	border-color: <?=$secondary?> !important;
}

html .blockquote-tertiary {
	border-color: <?=$tertiary?> !important;
}

html .blockquote-quaternary {
	border-color: <?=$quaternary?> !important;
}

html .blockquote-dark {
	border-color: #2e353e !important;
}

html .blockquote-light {
	border-color: #ffffff !important;
}

p.drop-caps:first-child:first-letter {
	color: <?=$primaryc?>;
}

p.drop-caps.drop-caps-style-2:first-child:first-letter {
	background-color: <?=$primaryc?>;
}

ul.nav-pills > li.active > a {
	background-color: <?=$primaryc?>;
}

ul.nav-pills > li.active > a:hover,
ul.nav-pills > li.active > a:focus {
	background-color: <?=$primaryc?>;
}

html ul.nav-pills-primary a {
	color: <?=$primaryc?>;
}

html ul.nav-pills-primary a:hover {
	color: #0099e6;
}

html ul.nav-pills-primary a:focus {
	color: #0099e6;
}

html ul.nav-pills-primary a:active {
	color: #0077b3;
}

html ul.nav-pills-primary > li.active > a {
	background-color: <?=$primaryc?>;
}

html ul.nav-pills-primary > li.active > a:hover,
html ul.nav-pills-primary > li.active > a:focus {
	background-color: <?=$primaryc?>;
}

html ul.nav-pills-secondary a {
	color: <?=$secondary?>;
}

html ul.nav-pills-secondary a:hover {
	color: #e7766f;
}

html ul.nav-pills-secondary a:focus {
	color: #e7766f;
}

html ul.nav-pills-secondary a:active {
	color: #df4c43;
}

html ul.nav-pills-secondary > li.active > a {
	background-color: <?=$secondary?>;
}

html ul.nav-pills-secondary > li.active > a:hover,
html ul.nav-pills-secondary > li.active > a:focus {
	background-color: <?=$secondary?>;
}

html ul.nav-pills-tertiary a {
	color: <?=$tertiary?>;
}

html ul.nav-pills-tertiary a:hover {
	color: #30bec6;
}

html ul.nav-pills-tertiary a:focus {
	color: #30bec6;
}

html ul.nav-pills-tertiary a:active {
	color: #26969c;
}

html ul.nav-pills-tertiary > li.active > a {
	background-color: <?=$tertiary?>;
}

html ul.nav-pills-tertiary > li.active > a:hover,
html ul.nav-pills-tertiary > li.active > a:focus {
	background-color: <?=$tertiary?>;
}

html ul.nav-pills-quaternary a {
	color: <?=$quaternary?>;
}

html ul.nav-pills-quaternary a:hover {
	color: #434c56;
}

html ul.nav-pills-quaternary a:focus {
	color: #434c56;
}

html ul.nav-pills-quaternary a:active {
	color: #2d323a;
}

html ul.nav-pills-quaternary > li.active > a {
	background-color: <?=$quaternary?>;
}

html ul.nav-pills-quaternary > li.active > a:hover,
html ul.nav-pills-quaternary > li.active > a:focus {
	background-color: <?=$quaternary?>;
}

html ul.nav-pills-dark a {
	color: #2e353e;
}

html ul.nav-pills-dark a:hover {
	color: #39424d;
}

html ul.nav-pills-dark a:focus {
	color: #39424d;
}

html ul.nav-pills-dark a:active {
	color: #23282f;
}

html ul.nav-pills-dark > li.active > a {
	background-color: #2e353e;
}

html ul.nav-pills-dark > li.active > a:hover,
html ul.nav-pills-dark > li.active > a:focus {
	background-color: #2e353e;
}

html ul.nav-pills-light a {
	color: #ffffff;
}

html ul.nav-pills-light a:hover {
	color: #ffffff;
}

html ul.nav-pills-light a:focus {
	color: #ffffff;
}

html ul.nav-pills-light a:active {
	color: #f2f2f2;
}

html ul.nav-pills-light > li.active > a {
	background-color: #ffffff;
}

html ul.nav-pills-light > li.active > a:hover,
html ul.nav-pills-light > li.active > a:focus {
	background-color: #ffffff;
}

.sort-source-wrapper .nav > li.active > a {
	color: <?=$primaryc?>;
}

.sort-source-wrapper .nav > li.active > a:hover,
.sort-source-wrapper .nav > li.active > a:focus {
	color: <?=$primaryc?>;
}

.sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: <?=$primaryc?>;
}

html .label-primary {
	background-color: <?=$primaryc?>;
}

html .label-secondary {
	background-color: <?=$secondary?>;
}

html .label-tertiary {
	background-color: <?=$tertiary?>;
}

html .label-quaternary {
	background-color: <?=$quaternary?>;
}

html .label-dark {
	background-color: #2e353e;
}

html .label-light {
	background-color: #ffffff;
}

.btn-link {
	color: <?=$primaryc?>;
}

.btn-link:hover {
	color: #0099e6;
}

.btn-link:active {
	color: #0077b3;
}

html .btn-primary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?> <?=$primaryc?> #006699;
}

html .btn-primary:hover {
	border-color: #0099e6 #0099e6 #0077b3;
	background-color: #0099e6;
}

html .btn-primary:active,
html .btn-primary:focus,
html .btn-primary:active:hover,
html .btn-primary:active:focus {
	border-color: #0077b3 #0077b3 #0077b3;
	background-color: #0077b3;
}

html .btn-primary.dropdown-toggle {
	border-left-color: #0077b3;
}

html .btn-primary[disabled] {
	border-color: #33bbff;
	background-color: #33bbff;
}

html .btn-primary:hover,
html .btn-primary:focus,
html .btn-primary:active:hover,
html .btn-primary:active:focus {
	color: #ffffff;
}

html .btn-primary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #006699;
	border-color: #006699 #006699 #004466;
}

html .btn-primary-scale-2:hover {
	border-color: #0077b3 #0077b3 #005580;
	background-color: #0077b3;
}

html .btn-primary-scale-2:active,
html .btn-primary-scale-2:focus,
html .btn-primary-scale-2:active:hover,
html .btn-primary-scale-2:active:focus {
	border-color: #005580 #005580 #005580;
	background-color: #005580;
}

html .btn-primary-scale-2.dropdown-toggle {
	border-left-color: #005580;
}

html .btn-primary-scale-2[disabled] {
	border-color: #00aaff;
	background-color: #00aaff;
}

html .btn-secondary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$secondary?>;
	border-color: <?=$secondary?> <?=$secondary?> #dc372d;
}

html .btn-secondary:hover {
	border-color: #e7766f #e7766f #df4c43;
	background-color: #e7766f;
}

html .btn-secondary:active,
html .btn-secondary:focus,
html .btn-secondary:active:hover,
html .btn-secondary:active:focus {
	border-color: #df4c43 #df4c43 #df4c43;
	background-color: #df4c43;
}

html .btn-secondary.dropdown-toggle {
	border-left-color: #df4c43;
}

html .btn-secondary[disabled] {
	border-color: #f2b4b0;
	background-color: #f2b4b0;
}

html .btn-secondary:hover,
html .btn-secondary:focus,
html .btn-secondary:active:hover,
html .btn-secondary:active:focus {
	color: #ffffff;
}

html .btn-secondary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #dc372d;
	border-color: #dc372d #dc372d #b7281f;
}

html .btn-secondary-scale-2:hover {
	border-color: #df4c43 #df4c43 #cd2c23;
	background-color: #df4c43;
}

html .btn-secondary-scale-2:active,
html .btn-secondary-scale-2:focus,
html .btn-secondary-scale-2:active:hover,
html .btn-secondary-scale-2:active:focus {
	border-color: #cd2c23 #cd2c23 #cd2c23;
	background-color: #cd2c23;
}

html .btn-secondary-scale-2.dropdown-toggle {
	border-left-color: #cd2c23;
}

html .btn-secondary-scale-2[disabled] {
	border-color: #ea8b85;
	background-color: #ea8b85;
}

html .btn-tertiary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$tertiary?>;
	border-color: <?=$tertiary?> <?=$tertiary?> #218388;
}

html .btn-tertiary:hover {
	border-color: #30bec6 #30bec6 #26969c;
	background-color: #30bec6;
}

html .btn-tertiary:active,
html .btn-tertiary:focus,
html .btn-tertiary:active:hover,
html .btn-tertiary:active:focus {
	border-color: #26969c #26969c #26969c;
	background-color: #26969c;
}

html .btn-tertiary.dropdown-toggle {
	border-left-color: #26969c;
}

html .btn-tertiary[disabled] {
	border-color: #68d4da;
	background-color: #68d4da;
}

html .btn-tertiary:hover,
html .btn-tertiary:focus,
html .btn-tertiary:active:hover,
html .btn-tertiary:active:focus {
	color: #ffffff;
}

html .btn-tertiary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #218388;
	border-color: #218388 #218388 #175b5f;
}

html .btn-tertiary-scale-2:hover {
	border-color: #26969c #26969c #1c6f73;
	background-color: #26969c;
}

html .btn-tertiary-scale-2:active,
html .btn-tertiary-scale-2:focus,
html .btn-tertiary-scale-2:active:hover,
html .btn-tertiary-scale-2:active:focus {
	border-color: #1c6f73 #1c6f73 #1c6f73;
	background-color: #1c6f73;
}

html .btn-tertiary-scale-2.dropdown-toggle {
	border-left-color: #1c6f73;
}

html .btn-tertiary-scale-2[disabled] {
	border-color: #3fc9d0;
	background-color: #3fc9d0;
}

html .btn-quaternary {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$quaternary?>;
	border-color: <?=$quaternary?> <?=$quaternary?> #22262b;
}

html .btn-quaternary:hover {
	border-color: #434c56 #434c56 #2d323a;
	background-color: #434c56;
}

html .btn-quaternary:active,
html .btn-quaternary:focus,
html .btn-quaternary:active:hover,
html .btn-quaternary:active:focus {
	border-color: #2d323a #2d323a #2d323a;
	background-color: #2d323a;
}

html .btn-quaternary.dropdown-toggle {
	border-left-color: #2d323a;
}

html .btn-quaternary[disabled] {
	border-color: #657181;
	background-color: #657181;
}

html .btn-quaternary:hover,
html .btn-quaternary:focus,
html .btn-quaternary:active:hover,
html .btn-quaternary:active:focus {
	color: #ffffff;
}

html .btn-quaternary-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #22262b;
	border-color: #22262b #22262b #0b0d0f;
}

html .btn-quaternary-scale-2:hover {
	border-color: #2d323a #2d323a #17191d;
	background-color: #2d323a;
}

html .btn-quaternary-scale-2:active,
html .btn-quaternary-scale-2:focus,
html .btn-quaternary-scale-2:active:hover,
html .btn-quaternary-scale-2:active:focus {
	border-color: #17191d #17191d #17191d;
	background-color: #17191d;
}

html .btn-quaternary-scale-2.dropdown-toggle {
	border-left-color: #17191d;
}

html .btn-quaternary-scale-2[disabled] {
	border-color: #4e5865;
	background-color: #4e5865;
}

html .btn-dark {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #2e353e;
	border-color: #2e353e #2e353e #181c21;
}

html .btn-dark:hover {
	border-color: #39424d #39424d #23282f;
	background-color: #39424d;
}

html .btn-dark:active,
html .btn-dark:focus,
html .btn-dark:active:hover,
html .btn-dark:active:focus {
	border-color: #23282f #23282f #23282f;
	background-color: #23282f;
}

html .btn-dark.dropdown-toggle {
	border-left-color: #23282f;
}

html .btn-dark[disabled] {
	border-color: #596779;
	background-color: #596779;
}

html .btn-dark:hover,
html .btn-dark:focus,
html .btn-dark:active:hover,
html .btn-dark:active:focus {
	color: #ffffff;
}

html .btn-dark-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #181c21;
	border-color: #181c21 #181c21 #030303;
}

html .btn-dark-scale-2:hover {
	border-color: #23282f #23282f #0d0f12;
	background-color: #23282f;
}

html .btn-dark-scale-2:active,
html .btn-dark-scale-2:focus,
html .btn-dark-scale-2:active:hover,
html .btn-dark-scale-2:active:focus {
	border-color: #0d0f12 #0d0f12 #0d0f12;
	background-color: #0d0f12;
}

html .btn-dark-scale-2.dropdown-toggle {
	border-left-color: #0d0f12;
}

html .btn-dark-scale-2[disabled] {
	border-color: #444e5b;
	background-color: #444e5b;
}

html .btn-light {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #ffffff;
	border-color: #ffffff #ffffff #e6e6e6;
}

html .btn-light:hover {
	border-color: #ffffff #ffffff #f2f2f2;
	background-color: #ffffff;
}

html .btn-light:active,
html .btn-light:focus,
html .btn-light:active:hover,
html .btn-light:active:focus {
	border-color: #f2f2f2 #f2f2f2 #f2f2f2;
	background-color: #f2f2f2;
}

html .btn-light.dropdown-toggle {
	border-left-color: #f2f2f2;
}

html .btn-light[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

html .btn-light:hover,
html .btn-light:focus,
html .btn-light:active:hover,
html .btn-light:active:focus {
	color: #777777;
}

html .btn-light-scale-2 {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #e6e6e6;
	border-color: #e6e6e6 #e6e6e6 #cccccc;
}

html .btn-light-scale-2:hover {
	border-color: #f2f2f2 #f2f2f2 #d9d9d9;
	background-color: #f2f2f2;
}

html .btn-light-scale-2:active,
html .btn-light-scale-2:focus,
html .btn-light-scale-2:active:hover,
html .btn-light-scale-2:active:focus {
	border-color: #d9d9d9 #d9d9d9 #d9d9d9;
	background-color: #d9d9d9;
}

html .btn-light-scale-2.dropdown-toggle {
	border-left-color: #d9d9d9;
}

html .btn-light-scale-2[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

html .btn-borders.btn-primary {
	background: transparent;
	border-color: <?=$primaryc?>;
	color: <?=$primaryc?>;
	text-shadow: none;
}

html .btn-borders.btn-primary:hover,
html .btn-borders.btn-primary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?> <?=$primaryc?> #006699;
	border-color: <?=$primaryc?> !important;
	color: #ffffff;
}

html .btn-borders.btn-primary:hover:hover,
html .btn-borders.btn-primary:focus:hover {
	border-color: #0099e6 #0099e6 #0077b3;
	background-color: #0099e6;
}

html .btn-borders.btn-primary:hover:active,
html .btn-borders.btn-primary:focus:active,
html .btn-borders.btn-primary:hover:focus,
html .btn-borders.btn-primary:focus:focus,
html .btn-borders.btn-primary:hover:active:hover,
html .btn-borders.btn-primary:focus:active:hover,
html .btn-borders.btn-primary:hover:active:focus,
html .btn-borders.btn-primary:focus:active:focus {
	border-color: #0077b3 #0077b3 #0077b3;
	background-color: #0077b3;
}

html .btn-borders.btn-primary:hover.dropdown-toggle,
html .btn-borders.btn-primary:focus.dropdown-toggle {
	border-left-color: #0077b3;
}

html .btn-borders.btn-primary:hover[disabled],
html .btn-borders.btn-primary:focus[disabled] {
	border-color: #33bbff;
	background-color: #33bbff;
}

html .btn-borders.btn-secondary {
	background: transparent;
	border-color: <?=$secondary?>;
	color: <?=$secondary?>;
	text-shadow: none;
}

html .btn-borders.btn-secondary:hover,
html .btn-borders.btn-secondary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$secondary?>;
	border-color: <?=$secondary?> <?=$secondary?> #dc372d;
	border-color: <?=$secondary?> !important;
	color: #ffffff;
}

html .btn-borders.btn-secondary:hover:hover,
html .btn-borders.btn-secondary:focus:hover {
	border-color: #e7766f #e7766f #df4c43;
	background-color: #e7766f;
}

html .btn-borders.btn-secondary:hover:active,
html .btn-borders.btn-secondary:focus:active,
html .btn-borders.btn-secondary:hover:focus,
html .btn-borders.btn-secondary:focus:focus,
html .btn-borders.btn-secondary:hover:active:hover,
html .btn-borders.btn-secondary:focus:active:hover,
html .btn-borders.btn-secondary:hover:active:focus,
html .btn-borders.btn-secondary:focus:active:focus {
	border-color: #df4c43 #df4c43 #df4c43;
	background-color: #df4c43;
}

html .btn-borders.btn-secondary:hover.dropdown-toggle,
html .btn-borders.btn-secondary:focus.dropdown-toggle {
	border-left-color: #df4c43;
}

html .btn-borders.btn-secondary:hover[disabled],
html .btn-borders.btn-secondary:focus[disabled] {
	border-color: #f2b4b0;
	background-color: #f2b4b0;
}

html .btn-borders.btn-tertiary {
	background: transparent;
	border-color: <?=$tertiary?>;
	color: <?=$tertiary?>;
	text-shadow: none;
}

html .btn-borders.btn-tertiary:hover,
html .btn-borders.btn-tertiary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$tertiary?>;
	border-color: <?=$tertiary?> <?=$tertiary?> #218388;
	border-color: <?=$tertiary?> !important;
	color: #ffffff;
}

html .btn-borders.btn-tertiary:hover:hover,
html .btn-borders.btn-tertiary:focus:hover {
	border-color: #30bec6 #30bec6 #26969c;
	background-color: #30bec6;
}

html .btn-borders.btn-tertiary:hover:active,
html .btn-borders.btn-tertiary:focus:active,
html .btn-borders.btn-tertiary:hover:focus,
html .btn-borders.btn-tertiary:focus:focus,
html .btn-borders.btn-tertiary:hover:active:hover,
html .btn-borders.btn-tertiary:focus:active:hover,
html .btn-borders.btn-tertiary:hover:active:focus,
html .btn-borders.btn-tertiary:focus:active:focus {
	border-color: #26969c #26969c #26969c;
	background-color: #26969c;
}

html .btn-borders.btn-tertiary:hover.dropdown-toggle,
html .btn-borders.btn-tertiary:focus.dropdown-toggle {
	border-left-color: #26969c;
}

html .btn-borders.btn-tertiary:hover[disabled],
html .btn-borders.btn-tertiary:focus[disabled] {
	border-color: #68d4da;
	background-color: #68d4da;
}

html .btn-borders.btn-quaternary {
	background: transparent;
	border-color: <?=$quaternary?>;
	color: <?=$quaternary?>;
	text-shadow: none;
}

html .btn-borders.btn-quaternary:hover,
html .btn-borders.btn-quaternary:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$quaternary?>;
	border-color: <?=$quaternary?> <?=$quaternary?> #22262b;
	border-color: <?=$quaternary?> !important;
	color: #ffffff;
}

html .btn-borders.btn-quaternary:hover:hover,
html .btn-borders.btn-quaternary:focus:hover {
	border-color: #434c56 #434c56 #2d323a;
	background-color: #434c56;
}

html .btn-borders.btn-quaternary:hover:active,
html .btn-borders.btn-quaternary:focus:active,
html .btn-borders.btn-quaternary:hover:focus,
html .btn-borders.btn-quaternary:focus:focus,
html .btn-borders.btn-quaternary:hover:active:hover,
html .btn-borders.btn-quaternary:focus:active:hover,
html .btn-borders.btn-quaternary:hover:active:focus,
html .btn-borders.btn-quaternary:focus:active:focus {
	border-color: #2d323a #2d323a #2d323a;
	background-color: #2d323a;
}

html .btn-borders.btn-quaternary:hover.dropdown-toggle,
html .btn-borders.btn-quaternary:focus.dropdown-toggle {
	border-left-color: #2d323a;
}

html .btn-borders.btn-quaternary:hover[disabled],
html .btn-borders.btn-quaternary:focus[disabled] {
	border-color: #657181;
	background-color: #657181;
}

html .btn-borders.btn-dark {
	background: transparent;
	border-color: #2e353e;
	color: #2e353e;
	text-shadow: none;
}

html .btn-borders.btn-dark:hover,
html .btn-borders.btn-dark:focus {
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #2e353e;
	border-color: #2e353e #2e353e #181c21;
	border-color: #2e353e !important;
	color: #ffffff;
}

html .btn-borders.btn-dark:hover:hover,
html .btn-borders.btn-dark:focus:hover {
	border-color: #39424d #39424d #23282f;
	background-color: #39424d;
}

html .btn-borders.btn-dark:hover:active,
html .btn-borders.btn-dark:focus:active,
html .btn-borders.btn-dark:hover:focus,
html .btn-borders.btn-dark:focus:focus,
html .btn-borders.btn-dark:hover:active:hover,
html .btn-borders.btn-dark:focus:active:hover,
html .btn-borders.btn-dark:hover:active:focus,
html .btn-borders.btn-dark:focus:active:focus {
	border-color: #23282f #23282f #23282f;
	background-color: #23282f;
}

html .btn-borders.btn-dark:hover.dropdown-toggle,
html .btn-borders.btn-dark:focus.dropdown-toggle {
	border-left-color: #23282f;
}

html .btn-borders.btn-dark:hover[disabled],
html .btn-borders.btn-dark:focus[disabled] {
	border-color: #596779;
	background-color: #596779;
}

html .btn-borders.btn-light {
	background: transparent;
	border-color: #ffffff;
	color: #ffffff;
	text-shadow: none;
}

html .btn-borders.btn-light:hover,
html .btn-borders.btn-light:focus {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: #ffffff;
	border-color: #ffffff #ffffff #e6e6e6;
	border-color: #ffffff !important;
	color: #777777;
}

html .btn-borders.btn-light:hover:hover,
html .btn-borders.btn-light:focus:hover {
	border-color: #ffffff #ffffff #f2f2f2;
	background-color: #ffffff;
}

html .btn-borders.btn-light:hover:active,
html .btn-borders.btn-light:focus:active,
html .btn-borders.btn-light:hover:focus,
html .btn-borders.btn-light:focus:focus,
html .btn-borders.btn-light:hover:active:hover,
html .btn-borders.btn-light:focus:active:hover,
html .btn-borders.btn-light:hover:active:focus,
html .btn-borders.btn-light:focus:active:focus {
	border-color: #f2f2f2 #f2f2f2 #f2f2f2;
	background-color: #f2f2f2;
}

html .btn-borders.btn-light:hover.dropdown-toggle,
html .btn-borders.btn-light:focus.dropdown-toggle {
	border-left-color: #f2f2f2;
}

html .btn-borders.btn-light:hover[disabled],
html .btn-borders.btn-light:focus[disabled] {
	border-color: #ffffff;
	background-color: #ffffff;
}

.pagination > li > a,
.pagination > li > span,
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
	color: <?=$primaryc?>;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
	background-color: <?=$primaryc?> !important;
	border-color: <?=$primaryc?>;
}

body.dark .pagination > li > a,
body.dark .pagination > li > span,
body.dark .pagination > li > a:hover,
body.dark .pagination > li > span:hover,
body.dark .pagination > li > a:focus,
body.dark .pagination > li > span:focus {
	color: <?=$primaryc?>;
}

body.dark .pagination > .active > a,
body.dark .pagination > .active > span,
body.dark .pagination > .active > a:hover,
body.dark .pagination > .active > span:hover,
body.dark .pagination > .active > a:focus,
body.dark .pagination > .active > span:focus {
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?>;
}

.pagination > .active > a,
body.dark .pagination > .active > a {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?> <?=$primaryc?> #006699;
}

.pagination > .active > a:hover,
body.dark .pagination > .active > a:hover {
	border-color: #0099e6 #0099e6 #0077b3;
	background-color: #0099e6;
}

.pagination > .active > a:active,
body.dark .pagination > .active > a:active,
.pagination > .active > a:focus,
body.dark .pagination > .active > a:focus,
.pagination > .active > a:active:hover,
body.dark .pagination > .active > a:active:hover,
.pagination > .active > a:active:focus,
body.dark .pagination > .active > a:active:focus {
	border-color: #0077b3 #0077b3 #0077b3;
	background-color: #0077b3;
}

.pagination > .active > a.dropdown-toggle,
body.dark .pagination > .active > a.dropdown-toggle {
	border-left-color: #0077b3;
}

.pagination > .active > a[disabled],
body.dark .pagination > .active > a[disabled] {
	border-color: #33bbff;
	background-color: #33bbff;
}

html .alert-primary {
	background-color: <?=$primaryc?>;
	border-color: #007ebd;
	color: #ffffff;
}

html .alert-primary .alert-link {
	color: #ffffff;
}

html .alert-secondary {
	background-color: <?=$secondary?>;
	border-color: #e1554c;
	color: #ffffff;
}

html .alert-secondary .alert-link {
	color: #ffffff;
}

html .alert-tertiary {
	background-color: <?=$tertiary?>;
	border-color: #289ea5;
	color: #ffffff;
}

html .alert-tertiary .alert-link {
	color: #ffffff;
}

html .alert-quaternary {
	background-color: <?=$quaternary?>;
	border-color: #31373f;
	color: #ffffff;
}

html .alert-quaternary .alert-link {
	color: #ffffff;
}

html .alert-dark {
	background-color: #2e353e;
	border-color: #272d35;
	color: #ffffff;
}

html .alert-dark .alert-link {
	color: #ffffff;
}

html .alert-light {
	background-color: #ffffff;
	border-color: #f7f7f7;
	color: #777777;
}

html .alert-light .alert-link {
	color: #777777;
}

html .progress-bar-primary {
	background-color: <?=$primaryc?>;
}

html .progress-bar-secondary {
	background-color: <?=$secondary?>;
}

html .progress-bar-tertiary {
	background-color: <?=$tertiary?>;
}

html .progress-bar-quaternary {
	background-color: <?=$quaternary?>;
}

html .progress-bar-dark {
	background-color: #2e353e;
}

html .progress-bar-light {
	background-color: #ffffff;
}

html section.section-primary {
	background-color: <?=$primaryc?> !important;
	border-color: #0077b3 !important;
}

html section.section-primary h1,
html section.section-primary h2,
html section.section-primary h3,
html section.section-primary h4,
html section.section-primary h5,
html section.section-primary h6 {
	color: #ffffff;
}

html section.section-primary p {
	color: #e6e6e6;
}

html section.section-primary-scale-2 {
	background-color: #006699 !important;
	border-color: #005580 !important;
}

html section.section-primary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #006699;
}

html section.section-secondary {
	background-color: <?=$secondary?> !important;
	border-color: #df4c43 !important;
}

html section.section-secondary h1,
html section.section-secondary h2,
html section.section-secondary h3,
html section.section-secondary h4,
html section.section-secondary h5,
html section.section-secondary h6 {
	color: #ffffff;
}

html section.section-secondary p {
	color: #e6e6e6;
}

html section.section-secondary-scale-2 {
	background-color: #dc372d !important;
	border-color: #cd2c23 !important;
}

html section.section-secondary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #dc372d;
}

html section.section-tertiary {
	background-color: <?=$tertiary?> !important;
	border-color: #26969c !important;
}

html section.section-tertiary h1,
html section.section-tertiary h2,
html section.section-tertiary h3,
html section.section-tertiary h4,
html section.section-tertiary h5,
html section.section-tertiary h6 {
	color: #ffffff;
}

html section.section-tertiary p {
	color: #e6e6e6;
}

html section.section-tertiary-scale-2 {
	background-color: #218388 !important;
	border-color: #1c6f73 !important;
}

html section.section-tertiary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #218388;
}

html section.section-quaternary {
	background-color: <?=$quaternary?> !important;
	border-color: #2d323a !important;
}

html section.section-quaternary h1,
html section.section-quaternary h2,
html section.section-quaternary h3,
html section.section-quaternary h4,
html section.section-quaternary h5,
html section.section-quaternary h6 {
	color: #ffffff;
}

html section.section-quaternary p {
	color: #e6e6e6;
}

html section.section-quaternary-scale-2 {
	background-color: #22262b !important;
	border-color: #17191d !important;
}

html section.section-quaternary-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #22262b;
}

html section.section-dark {
	background-color: #2e353e !important;
	border-color: #23282f !important;
}

html section.section-dark h1,
html section.section-dark h2,
html section.section-dark h3,
html section.section-dark h4,
html section.section-dark h5,
html section.section-dark h6 {
	color: #ffffff;
}

html section.section-dark p {
	color: #e6e6e6;
}

html section.section-dark-scale-2 {
	background-color: #181c21 !important;
	border-color: #0d0f12 !important;
}

html section.section-dark-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #181c21;
}

html section.section-light {
	background-color: #ffffff !important;
	border-color: #f2f2f2 !important;
}

html section.section-light h1,
html section.section-light h2,
html section.section-light h3,
html section.section-light h4,
html section.section-light h5,
html section.section-light h6 {
	color: #777777;
}

html section.section-light p {
	color: #5e5e5e;
}

html section.section-light-scale-2 {
	background-color: #e6e6e6 !important;
	border-color: #d9d9d9 !important;
}

html section.section-light-scale-2 .sort-source.sort-source-style-2 > li.active > a:after {
	border-top-color: #e6e6e6;
}

html section.section-default-scale-1 {
	background-color: #dbdbdb !important;
	border-top-color: #d3d3d3 !important;
}

html section.section-default-scale-2 {
	background-color: #c1c1c1 !important;
	border-top-color: #b9b9b9 !important;
}

html section.section-default-scale-3 {
	background-color: #a8a8a8 !important;
	border-top-color: #a0a0a0 !important;
}

html section.section-default-scale-4 {
	background-color: #8e8e8e !important;
	border-top-color: #868686 !important;
}

html section.section-default-scale-5 {
	background-color: #757575 !important;
	border-top-color: #6d6d6d !important;
}

html section.section-default-scale-6 {
	background-color: #5b5b5b !important;
	border-top-color: #535353 !important;
}

html section.section-default-scale-7 {
	background-color: #424242 !important;
	border-top-color: #3a3a3a !important;
}

html section.section-default-scale-8 {
	background-color: #282828 !important;
	border-top-color: #202020 !important;
}

html section.section-default-scale-9 {
	background-color: #0f0f0f !important;
	border-top-color: #070707 !important;
}

html.dark section.section-default-scale-1 {
	background-color: #333a44 !important;
	border-top-color: #2c323b !important;
}

html.dark section.section-default-scale-2 {
	background-color: #495362 !important;
	border-top-color: #424b59 !important;
}

html.dark section.section-default-scale-3 {
	background-color: #5e6b7f !important;
	border-top-color: #586476 !important;
}

html.dark section.section-default-scale-4 {
	background-color: #77849a !important;
	border-top-color: #6e7d93 !important;
}

html.dark section.section-default-scale-5 {
	background-color: #949faf !important;
	border-top-color: #8b97a9 !important;
}

html.dark section.section-default-scale-6 {
	background-color: #b1b9c5 !important;
	border-top-color: #a8b1be !important;
}

html.dark section.section-default-scale-7 {
	background-color: #ced3db !important;
	border-top-color: #c5cbd4 !important;
}

html.dark section.section-default-scale-8 {
	background-color: #ebeef1 !important;
	border-top-color: #e3e6ea !important;
}

html.dark section.section-default-scale-9 {
	background-color: #ffffff !important;
	border-top-color: #f7f7f7 !important;
}

section.page-header h1 {
	border-bottom-color: <?=$primaryc?>;
}

section.page-header.custom-product {
	background-color: #0077b3;
	border-top-color: #0081c2;
}

html .page-header-color.page-header-primary {
	background-color: <?=$primaryc?>;
	border-bottom-color: <?=$primaryc?>;
	color: #ffffff;
}

html .page-header-color.page-header-primary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-primary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-primary a {
	color: #ffffff;
}

html .page-header-color.page-header-primary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-secondary {
	background-color: <?=$secondary?>;
	border-bottom-color: <?=$secondary?>;
	color: #ffffff;
}

html .page-header-color.page-header-secondary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-secondary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-secondary a {
	color: #ffffff;
}

html .page-header-color.page-header-secondary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary {
	background-color: <?=$tertiary?>;
	border-bottom-color: <?=$tertiary?>;
	color: #ffffff;
}

html .page-header-color.page-header-tertiary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary a {
	color: #ffffff;
}

html .page-header-color.page-header-tertiary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary {
	background-color: <?=$quaternary?>;
	border-bottom-color: <?=$quaternary?>;
	color: #ffffff;
}

html .page-header-color.page-header-quaternary h1 {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary a {
	color: #ffffff;
}

html .page-header-color.page-header-quaternary .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-dark {
	background-color: #2e353e;
	border-bottom-color: #2e353e;
	color: #ffffff;
}

html .page-header-color.page-header-dark h1 {
	color: #ffffff;
}

html .page-header-color.page-header-dark h1 span {
	color: #ffffff;
}

html .page-header-color.page-header-dark a {
	color: #ffffff;
}

html .page-header-color.page-header-dark .breadcrumb > .active {
	color: #ffffff;
}

html .page-header-color.page-header-light {
	background-color: #ffffff;
	border-bottom-color: #ffffff;
	color: #777777;
}

html .page-header-color.page-header-light h1 {
	color: #777777;
}

html .page-header-color.page-header-light h1 span {
	color: #777777;
}

html .page-header-color.page-header-light a {
	color: #777777;
}

html .page-header-color.page-header-light .breadcrumb > .active {
	color: #777777;
}

html .toggle-primary .toggle label {
	color: <?=$primaryc?>;
	border-left-color: <?=$primaryc?>;
	border-right-color: <?=$primaryc?>;
}

html .toggle-primary .toggle.active > label {
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?>;
	color: #ffffff;
}

html .toggle-primary.toggle-simple .toggle > label:after {
	background-color: <?=$primaryc?>;
}

html .toggle-secondary .toggle label {
	color: <?=$secondary?>;
	border-left-color: <?=$secondary?>;
	border-right-color: <?=$secondary?>;
}

html .toggle-secondary .toggle.active > label {
	background-color: <?=$secondary?>;
	border-color: <?=$secondary?>;
	color: #ffffff;
}

html .toggle-secondary.toggle-simple .toggle > label:after {
	background-color: <?=$secondary?>;
}

html .toggle-tertiary .toggle label {
	color: <?=$tertiary?>;
	border-left-color: <?=$tertiary?>;
	border-right-color: <?=$tertiary?>;
}

html .toggle-tertiary .toggle.active > label {
	background-color: <?=$tertiary?>;
	border-color: <?=$tertiary?>;
	color: #ffffff;
}

html .toggle-tertiary.toggle-simple .toggle > label:after {
	background-color: <?=$tertiary?>;
}

html .toggle-quaternary .toggle label {
	color: <?=$quaternary?>;
	border-left-color: <?=$quaternary?>;
	border-right-color: <?=$quaternary?>;
}

html .toggle-quaternary .toggle.active > label {
	background-color: <?=$quaternary?>;
	border-color: <?=$quaternary?>;
	color: #ffffff;
}

html .toggle-quaternary.toggle-simple .toggle > label:after {
	background-color: <?=$quaternary?>;
}

html .toggle-dark .toggle label {
	color: #2e353e;
	border-left-color: #2e353e;
	border-right-color: #2e353e;
}

html .toggle-dark .toggle.active > label {
	background-color: #2e353e;
	border-color: #2e353e;
	color: #ffffff;
}

html .toggle-dark.toggle-simple .toggle > label:after {
	background-color: #2e353e;
}

html .toggle-light .toggle label {
	color: #ffffff;
	border-left-color: #ffffff;
	border-right-color: #ffffff;
}

html .toggle-light .toggle.active > label {
	background-color: #ffffff;
	border-color: #ffffff;
	color: #777777;
}

html .toggle-light.toggle-simple .toggle > label:after {
	background-color: #ffffff;
}

.thumb-info .thumb-info-type {
	background-color: <?=$primaryc?>;
}

.thumb-info .thumb-info-action-icon {
	background-color: <?=$primaryc?>;
}

.thumb-info-social-icons a {
	background-color: <?=$primaryc?>;
}

.thumbnail .zoom {
	background-color: <?=$primaryc?>;
}

.img-thumbnail .zoom {
	background-color: <?=$primaryc?>;
}

html .thumb-info .thumb-info-action-icon-primary {
	background-color: <?=$primaryc?>;
}

html .thumb-info .thumb-info-action-icon-primary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-secondary {
	background-color: <?=$secondary?>;
}

html .thumb-info .thumb-info-action-icon-secondary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-tertiary {
	background-color: <?=$tertiary?>;
}

html .thumb-info .thumb-info-action-icon-tertiary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-quaternary {
	background-color: <?=$quaternary?>;
}

html .thumb-info .thumb-info-action-icon-quaternary i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-dark {
	background-color: #2e353e;
}

html .thumb-info .thumb-info-action-icon-dark i {
	color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-light {
	background-color: #ffffff;
}

html .thumb-info .thumb-info-action-icon-light i {
	color: #777777;
}

.thumb-info-ribbon {
	background: <?=$primaryc?>;
}

.thumb-info-ribbon:before {
	border-right-color: #005580;
	border-left-color: #005580;
}

.inverted {
	background-color: <?=$primaryc?>;
}

html .inverted-primary {
	background-color: <?=$primaryc?>;
}

html .inverted-secondary {
	background-color: <?=$secondary?>;
}

html .inverted-tertiary {
	background-color: <?=$tertiary?>;
}

html .inverted-quaternary {
	background-color: <?=$quaternary?>;
}

html .inverted-dark {
	background-color: #2e353e;
}

html .inverted-light {
	background-color: #ffffff;
}

.owl-carousel .owl-dots .owl-dot.active span,
.owl-carousel .owl-dots .owl-dot:hover span {
	background-color: #0074ad;
}

.owl-carousel.show-nav-title .owl-nav [class*="owl-"] {
	color: <?=$primaryc?>;
}

.owl-carousel .owl-nav [class*="owl-"] {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?> <?=$primaryc?> #006699;
}

.owl-carousel .owl-nav [class*="owl-"]:hover {
	border-color: #0099e6 #0099e6 #0077b3;
	background-color: #0099e6;
}

.owl-carousel .owl-nav [class*="owl-"]:active,
.owl-carousel .owl-nav [class*="owl-"]:focus,
.owl-carousel .owl-nav [class*="owl-"]:active:hover,
.owl-carousel .owl-nav [class*="owl-"]:active:focus {
	border-color: #0077b3 #0077b3 #0077b3;
	background-color: #0077b3;
}

.owl-carousel .owl-nav [class*="owl-"].dropdown-toggle {
	border-left-color: #0077b3;
}

.owl-carousel .owl-nav [class*="owl-"][disabled] {
	border-color: #33bbff;
	background-color: #33bbff;
}

html body .tabs .nav-tabs a,
html.dark body .tabs .nav-tabs a,
html body .tabs .nav-tabs a:hover,
html.dark body .tabs .nav-tabs a:hover {
	color: <?=$primaryc?>;
}

html body .tabs .nav-tabs a:hover,
html.dark body .tabs .nav-tabs a:hover,
html body .tabs .nav-tabs a:focus,
html.dark body .tabs .nav-tabs a:focus {
	border-top-color: <?=$primaryc?>;
}

html body .tabs .nav-tabs li.active a,
html.dark body .tabs .nav-tabs li.active a {
	border-top-color: <?=$primaryc?>;
	color: <?=$primaryc?>;
}

html body .tabs .nav-tabs.nav-justified a:hover,
html.dark body .tabs .nav-tabs.nav-justified a:hover,
html body .tabs .nav-tabs.nav-justified a:focus,
html.dark body .tabs .nav-tabs.nav-justified a:focus {
	border-top-color: <?=$primaryc?>;
}

html body .tabs.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs.tabs-bottom .nav-tabs li a:hover,
html body .tabs.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a,
html body .tabs.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-bottom .nav-tabs li.active a:focus {
	border-bottom-color: <?=$primaryc?>;
}

html body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
	border-left-color: <?=$primaryc?>;
}

html body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus,
html.dark body .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
	border-right-color: <?=$primaryc?>;
}

html body .tabs-primary .nav-tabs li a,
html.dark body .tabs-primary .nav-tabs li a,
html body .tabs-primary .nav-tabs.nav-justified li a,
html.dark body .tabs-primary .nav-tabs.nav-justified li a,
html body .tabs-primary .nav-tabs li a:hover,
html.dark body .tabs-primary .nav-tabs li a:hover,
html body .tabs-primary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
	color: <?=$primaryc?>;
}

html body .tabs-primary .nav-tabs li a:hover,
html.dark body .tabs-primary .nav-tabs li a:hover,
html body .tabs-primary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?=$primaryc?>;
}

html body .tabs-primary .nav-tabs li.active a,
html.dark body .tabs-primary .nav-tabs li.active a,
html body .tabs-primary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a,
html body .tabs-primary .nav-tabs li.active a:hover,
html.dark body .tabs-primary .nav-tabs li.active a:hover,
html body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-primary .nav-tabs li.active a:focus,
html.dark body .tabs-primary .nav-tabs li.active a:focus,
html body .tabs-primary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-primary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?=$primaryc?>;
	color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-primary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-primary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a,
html body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-primary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-primary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?=$primaryc?>;
}

html body .tabs-primary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a,
html body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-primary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-primary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?=$primaryc?>;
}

html body .tabs-secondary .nav-tabs li a,
html.dark body .tabs-secondary .nav-tabs li a,
html body .tabs-secondary .nav-tabs.nav-justified li a,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a,
html body .tabs-secondary .nav-tabs li a:hover,
html.dark body .tabs-secondary .nav-tabs li a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
	color: <?=$secondary?>;
}

html body .tabs-secondary .nav-tabs li a:hover,
html.dark body .tabs-secondary .nav-tabs li a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?=$secondary?>;
}

html body .tabs-secondary .nav-tabs li.active a,
html.dark body .tabs-secondary .nav-tabs li.active a,
html body .tabs-secondary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a,
html body .tabs-secondary .nav-tabs li.active a:hover,
html.dark body .tabs-secondary .nav-tabs li.active a:hover,
html body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-secondary .nav-tabs li.active a:focus,
html.dark body .tabs-secondary .nav-tabs li.active a:focus,
html body .tabs-secondary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-secondary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?=$secondary?>;
	color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-secondary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a,
html body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-secondary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?=$secondary?>;
}

html body .tabs-secondary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a,
html body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-secondary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?=$secondary?>;
}

html body .tabs-tertiary .nav-tabs li a,
html.dark body .tabs-tertiary .nav-tabs li a,
html body .tabs-tertiary .nav-tabs.nav-justified li a,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a,
html body .tabs-tertiary .nav-tabs li a:hover,
html.dark body .tabs-tertiary .nav-tabs li a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
	color: <?=$tertiary?>;
}

html body .tabs-tertiary .nav-tabs li a:hover,
html.dark body .tabs-tertiary .nav-tabs li a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?=$tertiary?>;
}

html body .tabs-tertiary .nav-tabs li.active a,
html.dark body .tabs-tertiary .nav-tabs li.active a,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a,
html body .tabs-tertiary .nav-tabs li.active a:hover,
html.dark body .tabs-tertiary .nav-tabs li.active a:hover,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-tertiary .nav-tabs li.active a:focus,
html.dark body .tabs-tertiary .nav-tabs li.active a:focus,
html body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-tertiary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?=$tertiary?>;
	color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-tertiary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a,
html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-tertiary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?=$tertiary?>;
}

html body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a,
html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-tertiary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?=$tertiary?>;
}

html body .tabs-quaternary .nav-tabs li a,
html.dark body .tabs-quaternary .nav-tabs li a,
html body .tabs-quaternary .nav-tabs.nav-justified li a,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a,
html body .tabs-quaternary .nav-tabs li a:hover,
html.dark body .tabs-quaternary .nav-tabs li a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
	color: <?=$quaternary?>;
}

html body .tabs-quaternary .nav-tabs li a:hover,
html.dark body .tabs-quaternary .nav-tabs li a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li a:hover {
	border-top-color: <?=$quaternary?>;
}

html body .tabs-quaternary .nav-tabs li.active a,
html.dark body .tabs-quaternary .nav-tabs li.active a,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a,
html body .tabs-quaternary .nav-tabs li.active a:hover,
html.dark body .tabs-quaternary .nav-tabs li.active a:hover,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:hover,
html body .tabs-quaternary .nav-tabs li.active a:focus,
html.dark body .tabs-quaternary .nav-tabs li.active a:focus,
html body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-quaternary .nav-tabs.nav-justified li.active a:focus {
	border-top-color: <?=$quaternary?>;
	color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-quaternary.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li a:hover {
	border-left-color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a,
html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-quaternary.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li a:hover {
	border-right-color: <?=$quaternary?>;
}

html body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a,
html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-quaternary.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: <?=$quaternary?>;
}

html body .tabs-dark .nav-tabs li a,
html.dark body .tabs-dark .nav-tabs li a,
html body .tabs-dark .nav-tabs.nav-justified li a,
html.dark body .tabs-dark .nav-tabs.nav-justified li a,
html body .tabs-dark .nav-tabs li a:hover,
html.dark body .tabs-dark .nav-tabs li a:hover,
html body .tabs-dark .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
	color: #2e353e;
}

html body .tabs-dark .nav-tabs li a:hover,
html.dark body .tabs-dark .nav-tabs li a:hover,
html body .tabs-dark .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li a:hover {
	border-top-color: #2e353e;
}

html body .tabs-dark .nav-tabs li.active a,
html.dark body .tabs-dark .nav-tabs li.active a,
html body .tabs-dark .nav-tabs.nav-justified li.active a,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a,
html body .tabs-dark .nav-tabs li.active a:hover,
html.dark body .tabs-dark .nav-tabs li.active a:hover,
html body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:hover,
html body .tabs-dark .nav-tabs li.active a:focus,
html.dark body .tabs-dark .nav-tabs li.active a:focus,
html body .tabs-dark .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-dark .nav-tabs.nav-justified li.active a:focus {
	border-top-color: #2e353e;
	color: #2e353e;
}

html body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: #2e353e;
}

html body .tabs-dark.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-dark.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-dark.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-left li a:hover {
	border-left-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a,
html body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-dark.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-dark.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-right li a:hover {
	border-right-color: #2e353e;
}

html body .tabs-dark.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a,
html body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-dark.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-dark.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: #2e353e;
}

html body .tabs-light .nav-tabs li a,
html.dark body .tabs-light .nav-tabs li a,
html body .tabs-light .nav-tabs.nav-justified li a,
html.dark body .tabs-light .nav-tabs.nav-justified li a,
html body .tabs-light .nav-tabs li a:hover,
html.dark body .tabs-light .nav-tabs li a:hover,
html body .tabs-light .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
	color: #ffffff;
}

html body .tabs-light .nav-tabs li a:hover,
html.dark body .tabs-light .nav-tabs li a:hover,
html body .tabs-light .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li a:hover {
	border-top-color: #ffffff;
}

html body .tabs-light .nav-tabs li.active a,
html.dark body .tabs-light .nav-tabs li.active a,
html body .tabs-light .nav-tabs.nav-justified li.active a,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a,
html body .tabs-light .nav-tabs li.active a:hover,
html.dark body .tabs-light .nav-tabs li.active a:hover,
html body .tabs-light .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a:hover,
html body .tabs-light .nav-tabs li.active a:focus,
html.dark body .tabs-light .nav-tabs li.active a:focus,
html body .tabs-light .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-light .nav-tabs.nav-justified li.active a:focus {
	border-top-color: #ffffff;
	color: #ffffff;
}

html body .tabs-light.tabs-bottom .nav-tabs li a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs li a:hover,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li a:hover {
	border-bottom-color: #ffffff;
}

html body .tabs-light.tabs-bottom .nav-tabs li.active a,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a,
html body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:hover,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:hover,
html body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
html.dark body .tabs-light.tabs-bottom .nav-tabs li.active a:focus,
html body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus,
html.dark body .tabs-light.tabs-bottom .nav-tabs.nav-justified li.active a:focus {
	border-bottom-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-left li a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-left li a:hover {
	border-left-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-left li.active a,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a,
html body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:hover,
html body .tabs-light.tabs-vertical.tabs-left li.active a:focus,
html.dark body .tabs-light.tabs-vertical.tabs-left li.active a:focus {
	border-left-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-right li a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-right li a:hover {
	border-right-color: #ffffff;
}

html body .tabs-light.tabs-vertical.tabs-right li.active a,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a,
html body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:hover,
html body .tabs-light.tabs-vertical.tabs-right li.active a:focus,
html.dark body .tabs-light.tabs-vertical.tabs-right li.active a:focus {
	border-right-color: #ffffff;
}

html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-left .nav-tabs li.active a:focus {
	border-right-color: <?=$primaryc?>;
	border-left-color: transparent;
}

html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:hover,
html[dir="rtl"] .tabs.tabs-vertical.tabs-right .nav-tabs li.active a:focus {
	border-right-color: transparent;
	border-left-color: <?=$primaryc?>;
}

.list.list-icons li .fa,
.list.list-icons li .icons {
	color: <?=$primaryc?>;
	border-color: <?=$primaryc?>;
}

.list.list-icons.list-icons-style-3 li .fa,
.list.list-icons.list-icons-style-3 li .icons {
	background-color: <?=$primaryc?>;
}

.list.list-ordened li:before {
	color: <?=$primaryc?>;
	border-color: <?=$primaryc?>;
}

.list.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
}

html .list-primary.list-icons li .fa,
html .list-primary.list-icons li .icons {
	color: <?=$primaryc?>;
	border-color: <?=$primaryc?>;
}

html .list-primary.list-icons.list-icons-style-3 li .fa,
html .list-primary.list-icons.list-icons-style-3 li .icons {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-primary.list-ordened li:before {
	color: <?=$primaryc?>;
}

html .list-primary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-secondary.list-icons li .fa,
html .list-secondary.list-icons li .icons {
	color: <?=$secondary?>;
	border-color: <?=$secondary?>;
}

html .list-secondary.list-icons.list-icons-style-3 li .fa,
html .list-secondary.list-icons.list-icons-style-3 li .icons {
	background-color: <?=$secondary?>;
	color: #ffffff;
}

html .list-secondary.list-ordened li:before {
	color: <?=$secondary?>;
}

html .list-secondary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-tertiary.list-icons li .fa,
html .list-tertiary.list-icons li .icons {
	color: <?=$tertiary?>;
	border-color: <?=$tertiary?>;
}

html .list-tertiary.list-icons.list-icons-style-3 li .fa,
html .list-tertiary.list-icons.list-icons-style-3 li .icons {
	background-color: <?=$tertiary?>;
	color: #ffffff;
}

html .list-tertiary.list-ordened li:before {
	color: <?=$tertiary?>;
}

html .list-tertiary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-quaternary.list-icons li .fa,
html .list-quaternary.list-icons li .icons {
	color: <?=$quaternary?>;
	border-color: <?=$quaternary?>;
}

html .list-quaternary.list-icons.list-icons-style-3 li .fa,
html .list-quaternary.list-icons.list-icons-style-3 li .icons {
	background-color: <?=$quaternary?>;
	color: #ffffff;
}

html .list-quaternary.list-ordened li:before {
	color: <?=$quaternary?>;
}

html .list-quaternary.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-dark.list-icons li .fa,
html .list-dark.list-icons li .icons {
	color: #2e353e;
	border-color: #2e353e;
}

html .list-dark.list-icons.list-icons-style-3 li .fa,
html .list-dark.list-icons.list-icons-style-3 li .icons {
	background-color: #2e353e;
	color: #ffffff;
}

html .list-dark.list-ordened li:before {
	color: #2e353e;
}

html .list-dark.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .list-light.list-icons li .fa,
html .list-light.list-icons li .icons {
	color: #ffffff;
	border-color: #ffffff;
}

html .list-light.list-icons.list-icons-style-3 li .fa,
html .list-light.list-icons.list-icons-style-3 li .icons {
	background-color: #ffffff;
	color: #777777;
}

html .list-light.list-ordened li:before {
	color: #ffffff;
}

html .list-light.list-ordened.list-ordened-style-3 li:before {
	background-color: <?=$primaryc?>;
	color: #777777;
}

.parallax blockquote i.fa-quote-left {
	color: <?=$primaryc?>;
}

section.video blockquote i.fa-quote-left {
	color: <?=$primaryc?>;
}

.panel-group .panel-heading a {
	color: <?=$primaryc?>;
}

html .panel-group.panel-group-primary .panel-heading {
	background-color: <?=$primaryc?> !important;
}

html .panel-group.panel-group-primary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-secondary .panel-heading {
	background-color: <?=$secondary?> !important;
}

html .panel-group.panel-group-secondary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-tertiary .panel-heading {
	background-color: <?=$tertiary?> !important;
}

html .panel-group.panel-group-tertiary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-quaternary .panel-heading {
	background-color: <?=$quaternary?> !important;
}

html .panel-group.panel-group-quaternary .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-dark .panel-heading {
	background-color: #2e353e !important;
}

html .panel-group.panel-group-dark .panel-heading a {
	color: #ffffff;
}

html .panel-group.panel-group-light .panel-heading {
	background-color: #ffffff !important;
}

html .panel-group.panel-group-light .panel-heading a {
	color: #777777;
}

html .divider.divider-primary .fa,
html .divider.divider-primary .icons {
	color: <?=$primaryc?>;
}

html .divider.divider-primary.divider-small hr {
	background: <?=$primaryc?>;
}

html .divider.divider-secondary .fa,
html .divider.divider-secondary .icons {
	color: <?=$secondary?>;
}

html .divider.divider-secondary.divider-small hr {
	background: <?=$secondary?>;
}

html .divider.divider-tertiary .fa,
html .divider.divider-tertiary .icons {
	color: <?=$tertiary?>;
}

html .divider.divider-tertiary.divider-small hr {
	background: <?=$tertiary?>;
}

html .divider.divider-quaternary .fa,
html .divider.divider-quaternary .icons {
	color: <?=$quaternary?>;
}

html .divider.divider-quaternary.divider-small hr {
	background: <?=$quaternary?>;
}

html .divider.divider-dark .fa,
html .divider.divider-dark .icons {
	color: #2e353e;
}

html .divider.divider-dark.divider-small hr {
	background: #2e353e;
}

html .divider.divider-light .fa,
html .divider.divider-light .icons {
	color: #ffffff;
}

html .divider.divider-light.divider-small hr {
	background: #ffffff;
}

html .divider.divider-style-2.divider-primary .fa,
html .divider.divider-style-2.divider-primary .icons {
	background: <?=$primaryc?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-secondary .fa,
html .divider.divider-style-2.divider-secondary .icons {
	background: <?=$secondary?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-tertiary .fa,
html .divider.divider-style-2.divider-tertiary .icons {
	background: <?=$tertiary?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-quaternary .fa,
html .divider.divider-style-2.divider-quaternary .icons {
	background: <?=$quaternary?>;
	color: #ffffff;
}

html .divider.divider-style-2.divider-dark .fa,
html .divider.divider-style-2.divider-dark .icons {
	background: #2e353e;
	color: #ffffff;
}

html .divider.divider-style-2.divider-light .fa,
html .divider.divider-style-2.divider-light .icons {
	background: #ffffff;
	color: #777777;
}

html .divider.divider-style-3.divider-primary .fa,
html .divider.divider-style-3.divider-primary .icons {
	border-color: <?=$primaryc?>;
}

html .divider.divider-style-3.divider-secondary .fa,
html .divider.divider-style-3.divider-secondary .icons {
	border-color: <?=$secondary?>;
}

html .divider.divider-style-3.divider-tertiary .fa,
html .divider.divider-style-3.divider-tertiary .icons {
	border-color: <?=$tertiary?>;
}

html .divider.divider-style-3.divider-quaternary .fa,
html .divider.divider-style-3.divider-quaternary .icons {
	border-color: <?=$quaternary?>;
}

html .divider.divider-style-3.divider-dark .fa,
html .divider.divider-style-3.divider-dark .icons {
	border-color: #2e353e;
}

html .divider.divider-style-3.divider-light .fa,
html .divider.divider-style-3.divider-light .icons {
	border-color: #ffffff;
}

#header .tip {
	background: <?=$primaryc?>;
	color: #ffffff;
}

#header .tip:before {
	border-right-color: <?=$primaryc?>;
}

html #header .tip-primary {
	background: <?=$primaryc?> !important;
	color: #ffffff !important;
}

html #header .tip-primary:before {
	border-right-color: <?=$primaryc?> !important;
}

html #header .tip-secondary {
	background: <?=$secondary?> !important;
	color: #ffffff !important;
}

html #header .tip-secondary:before {
	border-right-color: <?=$secondary?> !important;
}

html #header .tip-tertiary {
	background: <?=$tertiary?> !important;
	color: #ffffff !important;
}

html #header .tip-tertiary:before {
	border-right-color: <?=$tertiary?> !important;
}

html #header .tip-quaternary {
	background: <?=$quaternary?> !important;
	color: #ffffff !important;
}

html #header .tip-quaternary:before {
	border-right-color: <?=$quaternary?> !important;
}

html #header .tip-dark {
	background: #2e353e !important;
	color: #ffffff !important;
}

html #header .tip-dark:before {
	border-right-color: #2e353e !important;
}

html #header .tip-light {
	background: #ffffff !important;
	color: #777777 !important;
}

html #header .tip-light:before {
	border-right-color: #ffffff !important;
}

html[dir="rtl"] #header .tip.skin:before {
	border-left-color: <?=$primaryc?>;
}

#header .header-btn-collapse-nav {
	background: <?=$primaryc?>;
}

@media (min-width: 992px) {
	#header .header-nav-main nav > ul > li.open > a,
	#header .header-nav-main nav > ul > li:hover > a {
		background: <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.dropdown .dropdown-menu {
		border-top-color: <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.dropdown .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu {
		border-top-color: <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.dropdown-reverse .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent <?=$primaryc?> transparent;
	}

	#header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu {
		border-top-color: <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.dropdown-mega-signin .dropdown-menu li a {
		color: <?=$primaryc?>;
	}

	#header .header-nav.header-nav-stripe nav > ul > li:not(:hover).active > a {
		color: <?=$primaryc?>;
	}

	#header .header-nav.header-nav-stripe nav > ul > li:hover > a {
		background-color: <?=$primaryc?>;
	}

	#header .header-nav.header-nav-top-line nav > ul li.active > a,
	#header .header-nav.header-nav-top-line nav > ul li:hover > a {
		color: <?=$primaryc?>;
	}

	#header .header-nav.header-nav-top-line nav > ul li.active > a:before,
	#header .header-nav.header-nav-top-line nav > ul li:hover > a:before {
		background: <?=$primaryc?>;
	}

	#header .header-nav.header-nav-dark-dropdown nav > ul li.active > a,
	#header .header-nav.header-nav-dark-dropdown nav > ul li:hover > a {
		color: <?=$primaryc?>;
	}

	html.side-header #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
	html.side-header #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
		border-left-color: <?=$primaryc?>;
	}

	html.side-header-right #header .header-nav-main nav > ul li.dropdown.open > .dropdown-menu,
	html.side-header-right #header .header-nav-main nav > ul li.dropdown:hover > .dropdown-menu {
		border-right-color: <?=$primaryc?>;
	}
}

@media (min-width: 992px) {
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
		color: <?=$primaryc?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary:hover > a {
		background: <?=$primaryc?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu {
		border-top-color: <?=$primaryc?>;
		background-color: <?=$primaryc?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #0099e6;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li:hover > a {
		background: #0099e6;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-primary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
		color: <?=$secondary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary:hover > a {
		background: <?=$secondary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu {
		border-top-color: <?=$secondary?>;
		background-color: <?=$secondary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #e7766f;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li:hover > a {
		background: #e7766f;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-secondary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
		color: <?=$tertiary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary:hover > a {
		background: <?=$tertiary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu {
		border-top-color: <?=$tertiary?>;
		background-color: <?=$tertiary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #30bec6;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li:hover > a {
		background: #30bec6;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-tertiary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
		color: <?=$quaternary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary:hover > a {
		background: <?=$quaternary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu {
		border-top-color: <?=$quaternary?>;
		background-color: <?=$quaternary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #434c56;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li:hover > a {
		background: #434c56;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-quaternary .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
		color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark:hover > a {
		background: #2e353e;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu {
		border-top-color: #2e353e;
		background-color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li a {
		color: #ffffff;
		border-bottom-color: #39424d;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li:hover > a {
		background: #39424d;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-dark .dropdown-mega-sub-title {
		color: #ffffff;
		opacity: 0.70;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a,
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light:hover > a {
		background: #ffffff;
		color: #777777;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu {
		border-top-color: #ffffff;
		background-color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li a {
		color: #777777;
		border-bottom-color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li:hover > a {
		background: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light .dropdown-menu li.dropdown-submenu > a:after {
		border-color: transparent transparent transparent #777777;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-mega.dropdown-light .dropdown-mega-sub-title {
		color: #777777;
		opacity: 0.70;
	}
}

@media (max-width: 991px) {
	#header .header-nav-main nav > ul > li > a,
	#header .header-nav-main nav > ul > li > a:focus,
	#header .header-nav-main nav > ul > li > a:hover {
		color: <?=$primaryc?>;
	}

	#header .header-nav-main nav > ul > li.active > a,
	#header .header-nav-main nav > ul > li.active > a:focus,
	#header .header-nav-main nav > ul > li.active > a:hover {
		background-color: <?=$primaryc?>;
	}
}

@media (max-width: 991px) {
	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary > a {
		color: <?=$primaryc?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-primary.active > a {
		background: <?=$primaryc?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary > a {
		color: <?=$secondary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-secondary.active > a {
		background: <?=$secondary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary > a {
		color: <?=$tertiary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-tertiary.active > a {
		background: <?=$tertiary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary > a {
		color: <?=$quaternary?>;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-quaternary.active > a {
		background: <?=$quaternary?>;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark > a {
		color: #2e353e;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-dark.active > a {
		background: #2e353e;
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light > a {
		color: #ffffff;
	}

	html #header .header-nav-main nav > ul > li.dropdown-full-color.dropdown-light.active > a {
		background: #ffffff;
		color: #777777;
	}
}

html #header .header-top.header-top-primary {
	background: <?=$primaryc?>;
	border-top-color: #0077b3;
}

html #header .header-top.header-top-primary .header-nav-top ul > li.open > a {
	background: #0099e6;
}

html #header .header-top.header-top-primary .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-primary .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-primary .header-nav-top ul > li.open > a:focus {
	background: #0099e6;
}

html #header .header-top.header-top-primary .dropdown-menu {
	background: #0099e6;
	border-color: #0099e6;
}

html #header .header-top.header-top-primary .dropdown-menu a:hover,
html #header .header-top.header-top-primary .dropdown-menu a:focus {
	background: #00aaff !important;
}

html #header .header-top.header-top-secondary {
	background: <?=$secondary?>;
	border-top-color: #df4c43;
}

html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a {
	background: #e7766f;
}

html #header .header-top.header-top-secondary .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-secondary .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-secondary .header-nav-top ul > li.open > a:focus {
	background: #e7766f;
}

html #header .header-top.header-top-secondary .dropdown-menu {
	background: #e7766f;
	border-color: #e7766f;
}

html #header .header-top.header-top-secondary .dropdown-menu a:hover,
html #header .header-top.header-top-secondary .dropdown-menu a:focus {
	background: #ea8b85 !important;
}

html #header .header-top.header-top-tertiary {
	background: <?=$tertiary?>;
	border-top-color: #26969c;
}

html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a {
	background: #30bec6;
}

html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-tertiary .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-tertiary .header-nav-top ul > li.open > a:focus {
	background: #30bec6;
}

html #header .header-top.header-top-tertiary .dropdown-menu {
	background: #30bec6;
	border-color: #30bec6;
}

html #header .header-top.header-top-tertiary .dropdown-menu a:hover,
html #header .header-top.header-top-tertiary .dropdown-menu a:focus {
	background: #3fc9d0 !important;
}

html #header .header-top.header-top-quaternary {
	background: <?=$quaternary?>;
	border-top-color: #2d323a;
}

html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a {
	background: #434c56;
}

html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-quaternary .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-quaternary .header-nav-top ul > li.open > a:focus {
	background: #434c56;
}

html #header .header-top.header-top-quaternary .dropdown-menu {
	background: #434c56;
	border-color: #434c56;
}

html #header .header-top.header-top-quaternary .dropdown-menu a:hover,
html #header .header-top.header-top-quaternary .dropdown-menu a:focus {
	background: #4e5865 !important;
}

html #header .header-top.header-top-dark {
	background: #2e353e;
	border-top-color: #23282f;
}

html #header .header-top.header-top-dark .header-nav-top ul > li.open > a {
	background: #39424d;
}

html #header .header-top.header-top-dark .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-dark .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-dark .header-nav-top ul > li.open > a:focus {
	background: #39424d;
}

html #header .header-top.header-top-dark .dropdown-menu {
	background: #39424d;
	border-color: #39424d;
}

html #header .header-top.header-top-dark .dropdown-menu a:hover,
html #header .header-top.header-top-dark .dropdown-menu a:focus {
	background: #444e5b !important;
}

html #header .header-top.header-top-light {
	background: #ffffff;
	border-top-color: #f2f2f2;
}

html #header .header-top.header-top-light .header-nav-top ul > li.open > a {
	background: #ffffff;
}

html #header .header-top.header-top-light .header-nav-top ul > li > a:hover,
html #header .header-top.header-top-light .header-nav-top ul > li.open > a:hover,
html #header .header-top.header-top-light .header-nav-top ul > li > a:focus,
html #header .header-top.header-top-light .header-nav-top ul > li.open > a:focus {
	background: #ffffff;
}

html #header .header-top.header-top-light .dropdown-menu {
	background: #ffffff;
	border-color: #ffffff;
}

html #header .header-top.header-top-light .dropdown-menu a:hover,
html #header .header-top.header-top-light .dropdown-menu a:focus {
	background: #ffffff !important;
}

@media (min-width: 992px) {
	html #header .header-nav-bar-primary {
		background: <?=$primaryc?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-secondary {
		background: <?=$secondary?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-tertiary {
		background: <?=$tertiary?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-quaternary {
		background: <?=$quaternary?> !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-dark {
		background: #2e353e !important;
		color: #ffffff !important;
	}

	html #header .header-nav-bar-light {
		background: #ffffff !important;
		color: #777777 !important;
	}
}

@media (min-width: 992px) {
	#header .header-nav-main.header-nav-main-light nav > ul > li.open > a,
	#header .header-nav-main.header-nav-main-light nav > ul > li:hover > a {
		color: <?=$primaryc?>;
	}

	#header .header-nav-main.header-nav-main-light nav > ul > li.active > a {
		color: <?=$primaryc?>;
	}
}

.testimonial blockquote {
	background: #0099e6;
}

.testimonial .testimonial-arrow-down {
	border-top-color: #0099e6;
}

html .testimonial-primary blockquote {
	background: #0099e6;
}

html .testimonial-primary .testimonial-arrow-down {
	border-top-color: #0099e6;
}

html .testimonial-secondary blockquote {
	background: #e7766f;
}

html .testimonial-secondary .testimonial-arrow-down {
	border-top-color: #e7766f;
}

html .testimonial-tertiary blockquote {
	background: #30bec6;
}

html .testimonial-tertiary .testimonial-arrow-down {
	border-top-color: #30bec6;
}

html .testimonial-quaternary blockquote {
	background: #434c56;
}

html .testimonial-quaternary .testimonial-arrow-down {
	border-top-color: #434c56;
}

html .testimonial-dark blockquote {
	background: #39424d;
}

html .testimonial-dark .testimonial-arrow-down {
	border-top-color: #39424d;
}

html .testimonial-light blockquote {
	background: #ffffff;
}

html .testimonial-light .testimonial-arrow-down {
	border-top-color: #ffffff;
}

.circular-bar.only-icon .fa,
.circular-bar.only-icon .icons {
	color: <?=$primaryc?>;
}

html .counters .counter-primary .fa,
html .counters .counter-primary .icons,
html .counters .counter-primary strong {
	color: <?=$primaryc?>;
}

html .counters .counter-secondary .fa,
html .counters .counter-secondary .icons,
html .counters .counter-secondary strong {
	color: <?=$secondary?>;
}

html .counters .counter-tertiary .fa,
html .counters .counter-tertiary .icons,
html .counters .counter-tertiary strong {
	color: <?=$tertiary?>;
}

html .counters .counter-quaternary .fa,
html .counters .counter-quaternary .icons,
html .counters .counter-quaternary strong {
	color: <?=$quaternary?>;
}

html .counters .counter-dark .fa,
html .counters .counter-dark .icons,
html .counters .counter-dark strong {
	color: #2e353e;
}

html .counters .counter-light .fa,
html .counters .counter-light .icons,
html .counters .counter-light strong {
	color: #ffffff;
}

.icon-featured {
	background-color: <?=$primaryc?>;
}

.featured-box-primary .icon-featured {
	background-color: <?=$primaryc?>;
}

.featured-box-primary .icon-featured:after {
	border-color: <?=$primaryc?>;
}

.featured-box-primary h4 {
	color: <?=$primaryc?>;
}

.featured-box-primary .box-content {
	border-top-color: <?=$primaryc?>;
}

html .featured-box-primary .icon-featured {
	background-color: <?=$primaryc?>;
}

html .featured-box-primary h4 {
	color: <?=$primaryc?>;
}

html .featured-box-primary .box-content {
	border-top-color: <?=$primaryc?>;
}

html .featured-box-secondary .icon-featured {
	background-color: <?=$secondary?>;
}

html .featured-box-secondary h4 {
	color: <?=$secondary?>;
}

html .featured-box-secondary .box-content {
	border-top-color: <?=$secondary?>;
}

html .featured-box-tertiary .icon-featured {
	background-color: <?=$tertiary?>;
}

html .featured-box-tertiary h4 {
	color: <?=$tertiary?>;
}

html .featured-box-tertiary .box-content {
	border-top-color: <?=$tertiary?>;
}

html .featured-box-quaternary .icon-featured {
	background-color: <?=$quaternary?>;
}

html .featured-box-quaternary h4 {
	color: <?=$quaternary?>;
}

html .featured-box-quaternary .box-content {
	border-top-color: <?=$quaternary?>;
}

html .featured-box-dark .icon-featured {
	background-color: #2e353e;
}

html .featured-box-dark h4 {
	color: #2e353e;
}

html .featured-box-dark .box-content {
	border-top-color: #2e353e;
}

html .featured-box-light .icon-featured {
	background-color: #ffffff;
}

html .featured-box-light h4 {
	color: #ffffff;
}

html .featured-box-light .box-content {
	border-top-color: #ffffff;
}

html .featured-boxes-style-3 .featured-box.featured-box-primary .icon-featured {
	border-color: <?=$primaryc?>;
	color: <?=$primaryc?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-secondary .icon-featured {
	border-color: <?=$secondary?>;
	color: <?=$secondary?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-tertiary .icon-featured {
	border-color: <?=$tertiary?>;
	color: <?=$tertiary?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-quaternary .icon-featured {
	border-color: <?=$quaternary?>;
	color: <?=$quaternary?>;
}

html .featured-boxes-style-3 .featured-box.featured-box-dark .icon-featured {
	border-color: #2e353e;
	color: #2e353e;
}

html .featured-boxes-style-3 .featured-box.featured-box-light .icon-featured {
	border-color: #ffffff;
	color: #ffffff;
}

html .featured-boxes-style-4 .featured-box.featured-box-primary .icon-featured {
	border-color: <?=$primaryc?>;
	color: <?=$primaryc?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-secondary .icon-featured {
	border-color: <?=$secondary?>;
	color: <?=$secondary?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-tertiary .icon-featured {
	border-color: <?=$tertiary?>;
	color: <?=$tertiary?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-quaternary .icon-featured {
	border-color: <?=$quaternary?>;
	color: <?=$quaternary?>;
}

html .featured-boxes-style-4 .featured-box.featured-box-dark .icon-featured {
	border-color: #2e353e;
	color: #2e353e;
}

html .featured-boxes-style-4 .featured-box.featured-box-light .icon-featured {
	border-color: #ffffff;
	color: #ffffff;
}

html .featured-boxes-style-5 .featured-box.featured-box-primary .icon-featured {
	color: <?=$primaryc?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-secondary .icon-featured {
	color: <?=$secondary?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-tertiary .icon-featured {
	color: <?=$tertiary?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-quaternary .icon-featured {
	color: <?=$quaternary?>;
}

html .featured-boxes-style-5 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-5 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-boxes-style-6 .featured-box.featured-box-primary .icon-featured {
	color: <?=$primaryc?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-secondary .icon-featured {
	color: <?=$secondary?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-tertiary .icon-featured {
	color: <?=$tertiary?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-quaternary .icon-featured {
	color: <?=$quaternary?>;
}

html .featured-boxes-style-6 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-6 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-boxes-style-8 .featured-box.featured-box-primary .icon-featured {
	color: <?=$primaryc?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-secondary .icon-featured {
	color: <?=$secondary?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-tertiary .icon-featured {
	color: <?=$tertiary?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-quaternary .icon-featured {
	color: <?=$quaternary?>;
}

html .featured-boxes-style-8 .featured-box.featured-box-dark .icon-featured {
	color: #2e353e;
}

html .featured-boxes-style-8 .featured-box.featured-box-light .icon-featured {
	color: #ffffff;
}

html .featured-box-effect-2.featured-box-primary .icon-featured:after {
	box-shadow: 0 0 0 3px <?=$primaryc?>;
}

html .featured-box-effect-2.featured-box-secondary .icon-featured:after {
	box-shadow: 0 0 0 3px <?=$secondary?>;
}

html .featured-box-effect-2.featured-box-tertiary .icon-featured:after {
	box-shadow: 0 0 0 3px <?=$tertiary?>;
}

html .featured-box-effect-2.featured-box-quaternary .icon-featured:after {
	box-shadow: 0 0 0 3px <?=$quaternary?>;
}

html .featured-box-effect-2.featured-box-dark .icon-featured:after {
	box-shadow: 0 0 0 3px #2e353e;
}

html .featured-box-effect-2.featured-box-light .icon-featured:after {
	box-shadow: 0 0 0 3px #ffffff;
}

html .featured-box-effect-3.featured-box-primary .icon-featured:after {
	box-shadow: 0 0 0 10px <?=$primaryc?>;
}

html .featured-box-effect-3.featured-box-primary:hover .icon-featured {
	background: <?=$primaryc?> !important;
}

html .featured-box-effect-3.featured-box-secondary .icon-featured:after {
	box-shadow: 0 0 0 10px <?=$secondary?>;
}

html .featured-box-effect-3.featured-box-secondary:hover .icon-featured {
	background: <?=$secondary?> !important;
}

html .featured-box-effect-3.featured-box-tertiary .icon-featured:after {
	box-shadow: 0 0 0 10px <?=$tertiary?>;
}

html .featured-box-effect-3.featured-box-tertiary:hover .icon-featured {
	background: <?=$tertiary?> !important;
}

html .featured-box-effect-3.featured-box-quaternary .icon-featured:after {
	box-shadow: 0 0 0 10px <?=$quaternary?>;
}

html .featured-box-effect-3.featured-box-quaternary:hover .icon-featured {
	background: <?=$quaternary?> !important;
}

html .featured-box-effect-3.featured-box-dark .icon-featured:after {
	box-shadow: 0 0 0 10px #2e353e;
}

html .featured-box-effect-3.featured-box-dark:hover .icon-featured {
	background: #2e353e !important;
}

html .featured-box-effect-3.featured-box-light .icon-featured:after {
	box-shadow: 0 0 0 10px #ffffff;
}

html .featured-box-effect-3.featured-box-light:hover .icon-featured {
	background: #ffffff !important;
}

.feature-box .feature-box-icon {
	background-color: <?=$primaryc?>;
}

html .feature-box-primary .feature-box-icon {
	background-color: <?=$primaryc?>;
}

html .feature-box-secondary .feature-box-icon {
	background-color: <?=$secondary?>;
}

html .feature-box-tertiary .feature-box-icon {
	background-color: <?=$tertiary?>;
}

html .feature-box-quaternary .feature-box-icon {
	background-color: <?=$quaternary?>;
}

html .feature-box-dark .feature-box-icon {
	background-color: #2e353e;
}

html .feature-box-light .feature-box-icon {
	background-color: #ffffff;
}

.feature-box.feature-box-style-2 .feature-box-icon i.fa,
.feature-box.feature-box-style-2 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-primary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-2 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-secondary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-2 .feature-box-icon .icons {
	color: <?=$secondary?>;
}

html .feature-box-tertiary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-2 .feature-box-icon .icons {
	color: <?=$tertiary?>;
}

html .feature-box-quaternary.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-2 .feature-box-icon .icons {
	color: <?=$quaternary?>;
}

html .feature-box-dark.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-2 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-2 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-2 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-3 .feature-box-icon {
	border-color: <?=$primaryc?>;
}

.feature-box.feature-box-style-3 .feature-box-icon i.fa,
.feature-box.feature-box-style-3 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-primary.feature-box-style-3 .feature-box-icon {
	border-color: <?=$primaryc?>;
}

html .feature-box-primary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-3 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-secondary.feature-box-style-3 .feature-box-icon {
	border-color: <?=$secondary?>;
}

html .feature-box-secondary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-3 .feature-box-icon .icons {
	color: <?=$secondary?>;
}

html .feature-box-tertiary.feature-box-style-3 .feature-box-icon {
	border-color: <?=$tertiary?>;
}

html .feature-box-tertiary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-3 .feature-box-icon .icons {
	color: <?=$tertiary?>;
}

html .feature-box-quaternary.feature-box-style-3 .feature-box-icon {
	border-color: <?=$quaternary?>;
}

html .feature-box-quaternary.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-3 .feature-box-icon .icons {
	color: <?=$quaternary?>;
}

html .feature-box-dark.feature-box-style-3 .feature-box-icon {
	border-color: #2e353e;
}

html .feature-box-dark.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-3 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-3 .feature-box-icon {
	border-color: #ffffff;
}

html .feature-box-light.feature-box-style-3 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-3 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-4 .feature-box-icon i.fa,
.feature-box.feature-box-style-4 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-primary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-4 .feature-box-icon .icons {
	color: <?=$primaryc?>;
}

html .feature-box-secondary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-4 .feature-box-icon .icons {
	color: <?=$secondary?>;
}

html .feature-box-tertiary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-4 .feature-box-icon .icons {
	color: <?=$tertiary?>;
}

html .feature-box-quaternary.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-4 .feature-box-icon .icons {
	color: <?=$quaternary?>;
}

html .feature-box-dark.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-4 .feature-box-icon .icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-4 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-4 .feature-box-icon .icons {
	color: #ffffff;
}

.feature-box.feature-box-style-5 .feature-box-icon i.fa,
.feature-box.feature-box-style-5 .feature-box-icon i.icons {
	color: <?=$primaryc?>;
}

html .feature-box-primary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?=$primaryc?>;
}

html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?=$secondary?>;
}

html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?=$tertiary?>;
}

html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-5 .feature-box-icon i.icons {
	color: <?=$quaternary?>;
}

html .feature-box-dark.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-5 .feature-box-icon i.icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-5 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-5 .feature-box-icon i.icons {
	color: #ffffff;
}

html .feature-box-primary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-primary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?=$primaryc?>;
}

html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-secondary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?=$secondary?>;
}

html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-tertiary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?=$tertiary?>;
}

html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-quaternary.feature-box-style-6 .feature-box-icon i.icons {
	color: <?=$quaternary?>;
}

html .feature-box-dark.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-dark.feature-box-style-6 .feature-box-icon i.icons {
	color: #2e353e;
}

html .feature-box-light.feature-box-style-6 .feature-box-icon i.fa,
html .feature-box-light.feature-box-style-6 .feature-box-icon i.icons {
	color: #ffffff;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(1) .featured-box-full-primary {
	background-color: #006699;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(2) .featured-box-full-primary {
	background-color: #0077b3;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(3) .featured-box-full-primary {
	background-color: <?=$primaryc?>;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(4) .featured-box-full-primary {
	background-color: #0099e6;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(5) .featured-box-full-primary {
	background-color: #00aaff;
}

html .featured-boxes-full-scale > [class*="col-"]:nth-child(6) .featured-box-full-primary {
	background-color: #1ab2ff;
}

html .featured-boxes-full .featured-box-full-primary {
	background-color: <?=$primaryc?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-secondary {
	background-color: <?=$secondary?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-tertiary {
	background-color: <?=$tertiary?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-quaternary {
	background-color: <?=$quaternary?>;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-dark {
	background-color: #2e353e;
	color: #ffffff;
}

html .featured-boxes-full .featured-box-full-light {
	background-color: #ffffff;
	color: #777777;
}

.pricing-table .most-popular {
	border-color: <?=$primaryc?>;
}

.pricing-table .most-popular h3 {
	background-color: <?=$primaryc?> !important;
}

.pricing-table.princig-table-flat .plan h3 {
	background-color: <?=$primaryc?>;
}

.pricing-table.princig-table-flat .plan h3 span {
	background: <?=$primaryc?>;
}

html .call-to-action.featured.featured-primary {
	border-top-color: <?=$primaryc?>;
}

html .call-to-action.call-to-action-primary {
	background: <?=$primaryc?>;
}

html .call-to-action.with-full-borders {
	border-color: <?=$primaryc?>;
}

html .call-to-action.call-to-action-primary {
	background: <?=$primaryc?>;
}

html .call-to-action.call-to-action-primary h3,
html .call-to-action.call-to-action-primary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-secondary {
	border-top-color: <?=$secondary?>;
}

html .call-to-action.call-to-action-secondary {
	background: <?=$secondary?>;
}

html .call-to-action.with-full-borders {
	border-color: <?=$secondary?>;
}

html .call-to-action.call-to-action-secondary {
	background: <?=$secondary?>;
}

html .call-to-action.call-to-action-secondary h3,
html .call-to-action.call-to-action-secondary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-tertiary {
	border-top-color: <?=$tertiary?>;
}

html .call-to-action.call-to-action-tertiary {
	background: <?=$tertiary?>;
}

html .call-to-action.with-full-borders {
	border-color: <?=$tertiary?>;
}

html .call-to-action.call-to-action-tertiary {
	background: <?=$tertiary?>;
}

html .call-to-action.call-to-action-tertiary h3,
html .call-to-action.call-to-action-tertiary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-quaternary {
	border-top-color: <?=$quaternary?>;
}

html .call-to-action.call-to-action-quaternary {
	background: <?=$quaternary?>;
}

html .call-to-action.with-full-borders {
	border-color: <?=$quaternary?>;
}

html .call-to-action.call-to-action-quaternary {
	background: <?=$quaternary?>;
}

html .call-to-action.call-to-action-quaternary h3,
html .call-to-action.call-to-action-quaternary p {
	color: #ffffff;
}

html .call-to-action.featured.featured-dark {
	border-top-color: #2e353e;
}

html .call-to-action.call-to-action-dark {
	background: #2e353e;
}

html .call-to-action.with-full-borders {
	border-color: #2e353e;
}

html .call-to-action.call-to-action-dark {
	background: #2e353e;
}

html .call-to-action.call-to-action-dark h3,
html .call-to-action.call-to-action-dark p {
	color: #ffffff;
}

html .call-to-action.featured.featured-light {
	border-top-color: #ffffff;
}

html .call-to-action.call-to-action-light {
	background: #ffffff;
}

html .call-to-action.with-full-borders {
	border-color: #ffffff;
}

html .call-to-action.call-to-action-light {
	background: #ffffff;
}

html .call-to-action.call-to-action-light h3,
html .call-to-action.call-to-action-light p {
	color: #777777;
}

section.timeline .timeline-box.left:before,
section.timeline .timeline-box.right:before {
	background: <?=$primaryc?>;
	box-shadow: 0 0 0 3px #ffffff, 0 0 0 6px <?=$primaryc?>;
}

ul.history li .featured-box .box-content {
	border-top-color: <?=$primaryc?>;
}

.recent-posts .date .month,
article.post .post-date .month {
	background-color: <?=$primaryc?>;
}

.recent-posts .date .day,
article.post .post-date .day {
	color: <?=$primaryc?>;
}

.slider .tp-bannertimer {
	background-color: <?=$primaryc?>;
}

.home-concept strong {
	color: <?=$primaryc?>;
}

html .home-intro-primary {
	background: <?=$primaryc?>;
}

html .home-intro-secondary {
	background: <?=$secondary?>;
}

html .home-intro-tertiary {
	background: <?=$tertiary?>;
}

html .home-intro-quaternary {
	background: <?=$quaternary?>;
}

html .home-intro-dark {
	background: #2e353e;
}

html .home-intro-light {
	background: #ffffff;
}

.home-intro p em {
	color: #00aaff;
}

html .slider-container .tp-caption-overlay-primary {
	background: <?=$primaryc?>;
}

html .slider-container .tp-caption-overlay-opacity-primary {
	background: rgba(0, 136, 204, 0.4);
}

html .slider-container .tp-caption-overlay-secondary {
	background: <?=$secondary?>;
}

html .slider-container .tp-caption-overlay-opacity-secondary {
	background: rgba(227, 97, 89, 0.4);
}

html .slider-container .tp-caption-overlay-tertiary {
	background: <?=$tertiary?>;
}

html .slider-container .tp-caption-overlay-opacity-tertiary {
	background: rgba(43, 170, 177, 0.4);
}

html .slider-container .tp-caption-overlay-quaternary {
	background: <?=$quaternary?>;
}

html .slider-container .tp-caption-overlay-opacity-quaternary {
	background: rgba(56, 63, 72, 0.4);
}

html .slider-container .tp-caption-overlay-dark {
	background: #2e353e;
}

html .slider-container .tp-caption-overlay-opacity-dark {
	background: rgba(46, 53, 62, 0.4);
}

html .slider-container .tp-caption-overlay-light {
	background: #ffffff;
}

html .slider-container .tp-caption-overlay-opacity-light {
	background: rgba(255, 255, 255, 0.4);
}
/* Arrows */
.tparrows.tparrows-carousel.tp-leftarrow,
.tparrows.tparrows-carousel.tp-rightarrow {
	color: #ffffff;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
	background-color: <?=$primaryc?>;
	border-color: <?=$primaryc?> <?=$primaryc?> #006699;
}

.tparrows.tparrows-carousel.tp-leftarrow:hover,
.tparrows.tparrows-carousel.tp-rightarrow:hover {
	border-color: #0099e6 #0099e6 #0077b3;
	background-color: #0099e6;
}

.tparrows.tparrows-carousel.tp-leftarrow:active,
.tparrows.tparrows-carousel.tp-rightarrow:active,
.tparrows.tparrows-carousel.tp-leftarrow:focus,
.tparrows.tparrows-carousel.tp-rightarrow:focus,
.tparrows.tparrows-carousel.tp-leftarrow:active:hover,
.tparrows.tparrows-carousel.tp-rightarrow:active:hover,
.tparrows.tparrows-carousel.tp-leftarrow:active:focus,
.tparrows.tparrows-carousel.tp-rightarrow:active:focus {
	border-color: #0077b3 #0077b3 #0077b3;
	background-color: #0077b3;
}

.tparrows.tparrows-carousel.tp-leftarrow.dropdown-toggle,
.tparrows.tparrows-carousel.tp-rightarrow.dropdown-toggle {
	border-left-color: #0077b3;
}

.tparrows.tparrows-carousel.tp-leftarrow[disabled],
.tparrows.tparrows-carousel.tp-rightarrow[disabled] {
	border-color: #33bbff;
	background-color: #33bbff;
}

.shop ul.products li.product .onsale {
	background-color: <?=$primaryc?>;
	border-bottom-color: #006da3;
}

.shop .star-rating span,
.shop .cart-totals tr.total .amount {
	color: <?=$primaryc?>;
}

#footer .footer-ribbon {
	background: <?=$primaryc?>;
}

#footer .footer-ribbon:before {
	border-right-color: #005580;
	border-left-color: #005580;
}

#footer.light h1,
#footer.light h2,
#footer.light h3,
#footer.light h4,
#footer.light a {
	color: <?=$primaryc?>;
}

#footer.color {
	background: <?=$primaryc?>;
	border-top-color: <?=$primaryc?>;
}

#footer.color .footer-ribbon {
	background: #006699;
}

#footer.color .footer-ribbon:before {
	border-right-color: #00334d;
}

#footer.color .footer-copyright {
	background: #0077b3;
	border-top-color: #0077b3;
}

html #footer.color-primary {
	background: <?=$primaryc?>;
	border-top-color: <?=$primaryc?>;
}

html #footer.color-primary .footer-ribbon {
	background: #006699;
}

html #footer.color-primary .footer-ribbon:before {
	border-right-color: #00334d;
}

html #footer.color-primary .footer-copyright {
	background: #0077b3;
	border-top-color: #0077b3;
}

html #footer.color-secondary {
	background: <?=$secondary?>;
	border-top-color: <?=$secondary?>;
}

html #footer.color-secondary .footer-ribbon {
	background: #dc372d;
}

html #footer.color-secondary .footer-ribbon:before {
	border-right-color: #a1231b;
}

html #footer.color-secondary .footer-copyright {
	background: #df4c43;
	border-top-color: #df4c43;
}

html #footer.color-tertiary {
	background: <?=$tertiary?>;
	border-top-color: <?=$tertiary?>;
}

html #footer.color-tertiary .footer-ribbon {
	background: #218388;
}

html #footer.color-tertiary .footer-ribbon:before {
	border-right-color: #12474a;
}

html #footer.color-tertiary .footer-copyright {
	background: #26969c;
	border-top-color: #26969c;
}

html #footer.color-quaternary {
	background: <?=$quaternary?>;
	border-top-color: <?=$quaternary?>;
}

html #footer.color-quaternary .footer-ribbon {
	background: #22262b;
}

html #footer.color-quaternary .footer-ribbon:before {
	border-right-color: #000000;
}

html #footer.color-quaternary .footer-copyright {
	background: #2d323a;
	border-top-color: #2d323a;
}

html #footer.color-dark {
	background: #2e353e;
	border-top-color: #2e353e;
}

html #footer.color-dark .footer-ribbon {
	background: #181c21;
}

html #footer.color-dark .footer-ribbon:before {
	border-right-color: #000000;
}

html #footer.color-dark .footer-copyright {
	background: #23282f;
	border-top-color: #23282f;
}

html #footer.color-light {
	background: #ffffff;
	border-top-color: #ffffff;
}

html #footer.color-light .footer-ribbon {
	background: #e6e6e6;
}

html #footer.color-light .footer-ribbon:before {
	border-right-color: #bfbfbf;
}

html #footer.color-light .footer-copyright {
	background: #f2f2f2;
	border-top-color: #f2f2f2;
}

.sample-icon-list .sample-icon a:hover {
	background-color: <?=$primaryc?>;
}

html.boxed .body {
	border-top-color: <?=$primaryc?>;
}
</style>