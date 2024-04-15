// Интерфейс сохранения файла определяет контракт на сохранение книги в файле

interface FilePersistence {
    public function save(Book $book);
}

// Простой класс сохранения файлов реализует интерфейс сохранения файлов и сохраняет книгу в файл с помощью функции file_put_contents

class SimpleFilePersistence implements FilePersistence {
    public function save(Book $book) {
        $filename = '/documents/' . $book->getTitle() . ' - ' . $book->getAuthor();
        file_put_contents($filename, serialize($book));
    }
}