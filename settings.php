<?php

// Order issue
include_once __DIR__.'/4 - Datenbank/DbTestCase.php';

// we are not PSR compatible here, so just include everything
$dir = new \DirectoryIterator(__DIR__);
foreach ($dir as $file) {
	if (!$file->isDot() && $file->isDir()) {
		$chapterDir = new \DirectoryIterator($file->getPathname());
		foreach ($chapterDir as $classFile) {
			if ($classFile->getExtension() == 'php') {
				include_once $classFile->getPathname();
			}
		}
	}
}