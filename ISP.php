// Интерфейс принтера определяет контракт на печать страницы

interface Printer {
    public function printPage($page);
}

// Класс PlainText Printer реализует интерфейс принтера и печатает страницу в виде обычного текста

class PlainTextPrinter implements Printer {
    public function printPage($page) {
        echo $page;
    }
}

// Класс Html Printer реализует интерфейс принтера и печатает страницу в формате HTML

class HtmlPrinter implements Printer {
    public function printPage($page) {
        echo $page;
    }
}