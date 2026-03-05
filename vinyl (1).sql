-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2025 г., 19:35
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vinyl`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL,
  `texttwo` text COLLATE utf8mb4_general_ci NOT NULL,
  `textthree` text COLLATE utf8mb4_general_ci NOT NULL,
  `pay` text COLLATE utf8mb4_general_ci NOT NULL,
  `delivery` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `text`, `texttwo`, `textthree`, `pay`, `delivery`) VALUES
(6, 'Мы — команда страстных любителей музыки, которая уже много лет занимается продажей виниловых пластинок. Наша цель — дарить вам возможность окунуться в атмосферу настоящего звука, наслаждаясь качественными изданиями и редкими коллекционными экземплярами. Мы ценим каждого клиента и стремимся сделать покупку максимально приятной и удобной\r\n\r\n', 'У нас представлен широкий ассортимент виниловых пластинок самых популярных жанров и редких изданий, которые сложно найти в других магазинах. Каждая пластинка проходит строгий контроль качества, чтобы вы получали только лучшее звучание и надежную упаковку. Наша команда — это настоящие любители винила, которые с радостью помогут подобрать идеальный альбом или ответят на все ваши вопросы. Мы предлагаем выгодные цены и регулярные акции, делая покупку виниловых пластинок доступной для каждого. Быстрая доставка позволяет вам наслаждаться новой покупкой уже в кратчайшие сроки. ', 'Погрузитесь в атмосферу настоящего звука с нашей коллекцией виниловых пластинок. Здесь вы найдете классические альбомы, редкие издания и новинки от лучших исполнителей. Наслаждайтесь теплым, насыщенным звучанием и создавайте свою уникальную музыкальную коллекцию. Закажите виниловые пластинки прямо сейчас и окунитесь в мир настоящего аудио!', '0', '0');

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` int NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `discription` text COLLATE utf8mb4_general_ci NOT NULL,
  `top` int NOT NULL,
  `auth_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `img`, `name`, `discription`, `top`, `auth_id`) VALUES
(1, 'img/author/melanie.jpg', 'Melanie Martinez', 'Мелани Мартинез — колумбийская певица, автор песен и актриса, родившаяся 4 августа 1995 года в Боготе, Колумбия. Она получила широкую популярность благодаря своему участию в музыкальных конкурсах и проектах, а также благодаря своему стилю и таланту. Мелани известна такими хитами, как \"Mi Niña\" и \"Mala\" — она активно сотрудничает с различными артистами и продюсерами в латиноамериканской музыкальной индустрии. Помимо музыкальной карьеры, она занимается модельной деятельностью и является популярной фигурой в социальных сетях. Мелани Мартинез считается одной из ярких молодых звезд латиноамериканской сцены.', 1, 5),
(2, 'img/author/roan.jpg', 'Chappel Roan', 'Чапел-Роан — небольшой город и коммуна во Франции, расположенная в регионе Бретань, департамент Иль и Варан. Этот живописный город славится своей богатой историей, средневековой архитектурой и красивой природой. Он особенно известен своим старым городом с узкими улочками, старинной крепостью и церковью Святого Этьена, которая восходит к средним векам. Чапел-Роан также является популярным туристическим направлением благодаря своей уютной атмосфере, историческим памятникам и живописным пейзажам. Город обладает богатым культурным наследием и считается одним из красивых мест для посещения в Бретани.', 1, 0),
(3, 'img/author/florence.jpg', 'Florence+Machine', '', 1, 0),
(4, 'img/author/lana.jpg', 'Lana Del Rey', 'Лана Дель Рей — американская певица, автор песен и музыкант, известная своим уникальным стилем, вдохновленным ретро-эстетикой 1950-1960-х годов, и атмосферным, меланхоличным звучанием. Ее настоящие имя — Элеонор Лоуэнна Альберта, родилась 21 июня 1985 года в Нью-Йорке. Лана прославилась благодаря таким хитам, как «Video Games», «Born to Die» и «Young and Beautiful». Ее музыка сочетает в себе элементы dream pop, indie и барокко-поп, создавая особую, мечтательную атмосферу. Лана Дель Рей известна своим уникальным образом, поэтичными текстами и глубоким эмоциональным содержанием своих песен.', 1, 8),
(5, 'img/author/jennie.jpg', 'Jennie', 'Дженни Ким — южнокорейская певица, участница популярной девичьей группы BLACKPINK, которая является одной из самых известных и влиятельных групп в мире K-pop. Родилась 16 апреля 1996 года в Южной Корее. Дженни известна своим ярким стилем, мощным вокалом и танцевальными навыками. Она дебютировала в составе BLACKPINK в 2016 году и с тех пор завоевала огромную популярность как на родине, так и за границей. Помимо работы в группе, Дженни занимается сольной карьерой, занимается модельной деятельностью и является лицом многих брендов. Она считается иконой стиля и вдохновением для миллионов поклонников по всему миру.', 1, 0),
(6, 'img/author/neigh.jpg', 'The Neighbourhood', 'The Neighbourhood — это американская инди-рок группа, основанная в Лос-Анджелесе в 2011 году. Группа известна своим атмосферным звучанием, сочетающим элементы альтернативного рока, инди-попа и соул. В состав группы входят Джейк Майерс (вокал, гитара), Мэтт Филлипс (бас-гитара), Бенджамин Глэм (ударные) и Джонатан Де Метрио (гитара, клавишные). Группа отличается мрачной эстетикой, глубокими текстами и атмосферным саундом, что сделало их популярными среди молодежи и любителей альтернативной музыки.', 0, 3),
(7, '	\r\nimg/author/billie.jpg', 'Billie Eilish', 'Билли Айлиш — американская певица, автор песен и продюсер, прославившаяся благодаря своему уникальному стилю и оригинальному подходу к музыке. Родилась 18 декабря 2001 года в Лос-Анджелесе. Ее творчество отличается мягким голосом, экспериментами со звуком и ярким визуальным стилем. В 2019 году она стала мировой звездой с хитами, такими как «Bad Guy», «Ocean Eyes» и «Therefore I Am». Билли активно использует свою популярность для выражения своих взглядов на общественные темы, творчество и самовыражение. Ее музыка и стиль оказали значительное влияние на современную молодежную культуру.', 1, 1),
(8, '	\r\nimg/author/tyler.jpg', 'Tyler the Creator', 'Tyler, The Creator — это американский рэпер, продюсер, дизайнер и основатель лейбла Odd Future (OFWGKTA). Он известен своим уникальным стилем, который сочетает трэп, хип-хоп, альтернативный и экспериментальный звук, а также яркими, иногда провокационными текстами.', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `address`) VALUES
(1, 'VinylLounge@gmail.com', '8 800 555 35 35', 'Россия, г. Барнаул, Ленина ул., д. 8 кв.88');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` int NOT NULL,
  `year` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `genre` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `genges_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `year`, `country`, `genre`, `genges_id`) VALUES
(5, '2014', 'Соединенные Штаты Америки', 'дезерт-рок, психоделический рок, софт-рок, дрим-поп, джаз-фьюжн', 8),
(6, '2024', 'Соединенные Штаты Америки', 'альт-поп, электро-гот, bedroom pop, авангардная поп-музыка, софт-рока, дип-хауса', 1),
(7, '2015', 'Соединенные Штаты Америки', 'альтернативный рок, альтернативный R&B, экспериментальный рок, нео-психоделия', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `header`
--

CREATE TABLE `header` (
  `id` int NOT NULL,
  `img` varchar(150) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `author` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `popular` int NOT NULL,
  `soundtrack` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `author`, `price`, `popular`, `soundtrack`) VALUES
(1, 'img/artist/hmhas.jpg', 'Hit Me Hard and Soft', 'Billie Eilish', 6900, 1, 0),
(2, 'img/artist/honeymoon.webp', 'Honeymoon', 'Lana del Rey', 5000, 1, 0),
(3, 'img/artist/wipedout.webp', 'Wiped Out', 'The Neighbourhood', 8500, 1, 0),
(4, 'img/artist/Chroma.webp', 'Chromakopia', 'Tyler the Creator', 5500, 0, 0),
(5, 'img/artist/cry.jpg', 'Crybaby', 'Melanie Martinez', 4900, 1, 0),
(6, 'img/artist/blurryface.webp', 'Blurryface', 'Twenty One Pilots', 6000, 1, 0),
(7, 'img/artist/Whoreally.webp', 'Who Really Cares', 'TV girl', 6300, 1, 0),
(8, 'img/artist/ultra.jpg', 'ULTRAVIOLENCE', 'Lana del Rey', 10500, 1, 0),
(10, 'img/artist/wwafs.webp', 'When we all fall asleep', 'Billie Eilish', 7000, 1, 0),
(11, 'img/artist/born.jpg', 'Born to Die', 'Lana del Rey', 8900, 1, 0),
(12, 'img/artist/norman.jpg', 'Norman Fuing Rockwell', 'Lana del Rey', 6700, 0, 0),
(13, 'img/artist/k12.webp', 'K12', 'Melanie Martinez', 6100, 0, 0),
(15, 'img/artist/Chipchrome.webp', 'Chip Chrome', 'The Neighbourhood', 9500, 0, 0),
(16, 'img/artist/flowerboy.jpg', 'Flower Boy', 'Tyler the Creator', 5800, 1, 0),
(17, 'img/artist/igor.jpg', 'Igor', 'Tyler the Creator', 7000, 0, 0),
(18, 'img/artist/Thegods.webp', 'The Gods We Can Touch', 'Aurora', 5300, 0, 0),
(21, 'img/artist/lust.webp', 'Lust for Life', 'Lana del Rey', 8900, 0, 0),
(22, 'img/artist/dont.jpg', 'Dont Smile at Me', 'Billie Eilish', 6800, 0, 0),
(23, 'img/artist/happier.webp', 'Happier Then Ever', 'Billie Eilish', 8400, 0, 0),
(24, 'img/artist/vessel.jpg', 'Vessel', 'Twenty One Pilots', 7300, 1, 0),
(25, 'img/artist/pop2.jpeg', 'POP 2', 'Charlie XCX', 5200, 0, 0),
(26, 'img/artist/iloveyou.jpeg', 'I Love You', 'The Neighbourhood', 8600, 0, 0),
(27, 'img/artist/blue.jpg', 'Blue Banisters', 'Lana del Rey', 5000, 0, 0),
(28, 'img/artist/a&w.webp', 'A&W', 'Lana del Rey', 6900, 0, 0),
(29, 'img/artist/brat.png', 'BRAT', 'Charlie XCX', 6700, 1, 0),
(30, 'img/soundtrack/pulm.webp', 'Pulm Fiction', '', 9500, 0, 1),
(31, 'img/soundtrack/euphoria.jpg', 'Euphoria', '', 7600, 0, 1),
(32, 'img/soundtrack/blade.webp', 'Blade Runner', '', 6300, 0, 1),
(33, 'img/soundtrack/notime.webp', 'No Time to Die', '', 5100, 0, 1),
(34, 'img/soundtrack/gatsby.jpg', 'The Great Gatsby', '', 5500, 0, 1),
(35, 'img/soundtrack/osd.jpg', 'Strangers Things', '', 6900, 0, 1),
(36, 'img/soundtrack/aot.jpg', 'Attack on Titan', '', 12000, 0, 2),
(37, 'img/soundtrack/eva.webp', 'Evangelion', '', 9900, 0, 2),
(38, 'img/soundtrack/nana.jpg', 'NANA', '', 8900, 0, 2),
(39, 'img/soundtrack/sonny.webp', 'Sonny Boy', '', 7800, 0, 2),
(40, 'img/soundtrack/star.webp', 'Oshi no Ko', '', 6500, 0, 2),
(41, 'img/soundtrack/jojo.jpeg', 'JoJo', '0', 12000, 0, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id`, `email`, `name`, `text`) VALUES
(1, 'semakovasveta460@gmail.com', 'Lumin', 'zxcvbnm,./');

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `stars` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `text` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `stars`, `text`) VALUES
(1, 'Смирнова Ольга', '5', 'Замечательный магазин, приобретала пластинки ка онлайн, так и оффлайн. Все прошло очень хорошо, в магазине сотрудники очень милые и доброжелательные, в онлайн версии быстрая доставка'),
(2, 'Марина Иванова', '5', 'Магазин понравился! Вся виниловая коллекция в отличном состоянии, обслуживание на высшем уровне. Спасибо!'),
(3, 'Алексей Смирнов', '5', 'Купил здесь несколько редких пластинок. Всё пришло вовремя и в отличном состоянии. Рекомендую всем любителям винила!'),
(4, 'Марина Иванова', '5', 'Магазин понравился! Вся виниловая коллекция в отличном состоянии, обслуживание на высшем уровне. Спасибо!'),
(5, 'Елена Кузнецова', '4', 'Очень довольна покупкой! Отличный выбор и приятные цены. Обслуживание было очень дружелюбным. Буду возвращаться!'),
(6, 'Lumin', '5', 'hvjbkn');

-- --------------------------------------------------------

--
-- Структура таблицы `songs`
--

CREATE TABLE `songs` (
  `id` int NOT NULL,
  `song` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `author_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `songs`
--

INSERT INTO `songs` (`id`, `song`, `author_id`) VALUES
(1, 'Cruel World', 8),
(2, 'Ultraviolence', 8),
(3, 'Shades Of Cool', 8),
(4, 'Brooklyn Baby', 8),
(5, 'West Coast', 8),
(6, 'Sad Girl', 8),
(7, 'Pretty When You Cry', 8),
(8, 'Money Power Glory', 8),
(9, 'Black Beauty', 8),
(10, 'Guns And Roses', 8),
(11, 'BIRDS OF A FEATHER', 1),
(12, 'THE DINNER', 1),
(13, 'BLUE', 1),
(14, 'THE LUNCH', 1),
(15, 'SKINNY', 1),
(16, 'WILDFLOWER', 1),
(17, 'LAMOUR DE MA VIE', 1),
(18, 'BITTERSUITE', 1),
(19, 'CHIHIRO', 1),
(20, 'THE GREATEST', 1),
(21, 'BIRDS OF A FEATHER', 1),
(22, 'THE DINNER', 1),
(23, 'BLUE', 1),
(24, 'THE LUNCH', 1),
(25, 'SKINNY', 1),
(26, 'WILDFLOWER', 1),
(27, 'LAMOUR DE MA VIE', 1),
(28, 'BITTERSUITE', 1),
(29, 'CHIHIRO', 1),
(30, 'THE GREATEST', 1),
(31, 'Daddy Issues', 3),
(32, 'The Beach', 3),
(33, 'Cry Baby', 3),
(34, 'A Moment of Silence', 3),
(35, 'Baby Came Home 2 / Valentines', 3),
(36, 'R.I.P. 2 My Youth', 3),
(37, 'Single', 3),
(38, 'Greetings From Califournia', 3),
(39, 'Prey', 3),
(40, 'Wiped Out!', 3),
(41, 'Ferrari', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `header`
--
ALTER TABLE `header`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
