-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `apass` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `apass`) VALUES
(1, 'rishabh', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `announce_id` int(20) NOT NULL,
  `announce` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`announce_id`, `announce`) VALUES
(1, 'gfdfgdg');

-- --------------------------------------------------------

--
-- Table structure for table `ascourse`
--

CREATE TABLE `ascourse` (
  `uid` int(11) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `paid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ascourse`
--

INSERT INTO `ascourse` (`uid`, `cname`, `paid`) VALUES
(4, 'React', 'yes'),
(4, 'C', 'yes'),
(101, 'C', 'yes'),
(124, 'Java', 'yes'),
(104, 'php', 'yes'),
(104, 'php', 'yes'),
(101, 'Android', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `details` longtext NOT NULL,
  `amt` int(11) NOT NULL,
  `prof` varchar(25) NOT NULL,
  `img` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `details`, `amt`, `prof`, `img`) VALUES
(6, 'Android', 'The Android programming language course offers a comprehensive exploration of mobile app development on the Android platform, catering to both beginners and experienced developers. Throughout the duration of the course, typically spanning from a few weeks to a few months depending on the depth of study, participants delve into the fundamentals of Java or Kotlin, the primary languages for Android development. The curriculum encompasses various topics including user interface design, data storage, networking, and integrating advanced features like location tracking and push notifications. Hands-on projects and practical exercises reinforce theoretical concepts, enabling students to build their own Android applications from scratch. Embarking on an Android programming language course presents numerous compelling reasons. Firstly, it aligns with the booming demand for skilled Android developers in today\'s tech industry. Mastery of Android development not only opens up lucrative career opportunities but also empowers individuals to innovate and contribute to the ever-evolving landscape of mobile technology. Moreover, Android\'s expansive market share worldwide makes it a vital platform for reaching a vast audience and driving impactful change through software solutions. Whether aspiring to pursue a career in app development, enhance existing programming skills, or simply satisfy curiosity, this course equips learners with the essential tools and knowledge to thrive in the dynamic realm of Android development. By investing time and effort into mastering this versatile programming language, individuals position themselves at the forefront of innovation, poised to shape the future of mobile computing. Duration of course 3 months.', 10000, 'Atish Shriniwar', 'https://tse3.mm.bing.net/th?id=OIP.AUQ4Y6R8vBPqRicdlQntMgAAAA&pid=Api&P=0&h=220'),
(8, 'C', 'The C Programming Language course offers a comprehensive exploration into the fundamentals of programming using the C language, catering to individuals ranging from beginners to seasoned developers. Typically spanning from a few weeks to a couple of months, the course delves into the core concepts of C programming, including variables, data types, control structures, functions, arrays, pointers, memory management, and file handling. Through a combination of lectures, coding exercises, and projects, participants develop a strong understanding of the language\'s syntax and semantics, as well as its practical application in software development. Embarking on a C Programming Language course presents numerous compelling reasons. Firstly, C is often regarded as the \"mother of all programming languages,\" serving as the foundation for many modern programming languages like C++, Java, and Python. Mastering C not only provides a solid programming foundation but also enhances problem-solving and algorithmic thinking skills, which are valuable assets in any technical field. Furthermore, C is widely used in system programming, embedded systems, game development, and operating system development, making it indispensable for aspiring software engineers and developers. By learning C, individuals gain access to a vast ecosystem of tools, libraries, and resources, enabling them to tackle a diverse range of projects and excel in their careers. Whether aiming to pursue a career in software engineering, deepen technical expertise, or simply cultivate a passion for programming, this course equips learners with the essential skills and knowledge needed to succeed in the dynamic world of computer programming. Duration of course 4 months.', 10000, 'Ashpak Nadaf', 'https://tse3.mm.bing.net/th?id=OIP.bkbn2-K7c9rMBV5dvYXDrQHaIh&pid=Api&P=0&h=220'),
(1, 'C++', 'The C++ programming language course offers a comprehensive exploration of one of the most influential and widely used programming languages in the world. Typically spanning from a few weeks to several months, this course covers a broad range of topics essential for mastering C++ development. Participants delve into the fundamentals of C++ syntax, data types, control structures, functions, classes, and object-oriented programming principles. Advanced topics such as templates, memory management, and multithreading are also covered, providing students with a holistic understanding of the language and its applications. Hands-on projects and coding exercises reinforce theoretical concepts, allowing participants to develop practical skills and build their own C++ applications. Enrolling in a C++ programming language course offers numerous compelling benefits. Firstly, C++ remains a cornerstone of software development across various industries, making it a highly sought-after skill in the job market. Mastery of C++ not only opens up lucrative career opportunities but also equips individuals with the versatility to work on a wide range of projects, from system software and game development to high-performance applications and embedded systems. Additionally, learning C++ enhances problem-solving and critical thinking abilities, as it requires a deep understanding of computer science principles and low-level programming concepts. Moreover, C++ is the foundation of many other programming languages, making it an excellent gateway for exploring related disciplines such as C#, Java, and Python. Whether aiming to pursue a career in software engineering, advance existing programming skills, or simply broaden intellectual horizons, undertaking a C++ programming language course provides learners with the essential knowledge and expertise to thrive in the ever-evolving landscape of technology. By investing time and effort in mastering this powerful and versatile language, individuals position themselves for success in the competitive world of software development, ready to tackle complex challenges and make meaningful contributions to the digital realm. Duration of course 3 months.', 50000, 'Shubangi Chavan', 'https://tse4.mm.bing.net/th?id=OIP.fvS6KMdUTt4e6fxtmADq2AHaHa&pid=Api&P=0&h=220'),
(3, 'Data ', 'The Data Structures Programming Language course offers a comprehensive exploration of fundamental data structures and algorithms, essential building blocks for efficient problem-solving and software development. Typically spanning from a few weeks to several months, the curriculum delves into various data structures such as arrays, linked lists, stacks, queues, trees, and graphs, along with algorithms for searching, sorting, and manipulating data efficiently. Through a combination of theoretical lectures, practical coding exercises, and algorithmic problem-solving tasks, participants gain a deep understanding of how different data structures operate and how to choose the most appropriate ones for solving specific computational problems. Enrolling in a Data Structures Programming Language course is highly beneficial for several reasons. Firstly, it lays a solid foundation for understanding advanced concepts in computer science and software engineering. Proficiency in data structures and algorithms is a prerequisite for excelling in technical interviews at top tech companies and for tackling complex programming challenges in real-world projects. Additionally, mastering data structures enhances the efficiency and performance of software applications, leading to faster and more scalable solutions. Moreover, the problem-solving skills developed through this course are transferable across various domains, making graduates highly sought after in the competitive job market. Whether pursuing a career in software development, data analysis, or machine learning, proficiency in data structures and algorithms is indispensable. Thus, investing time and effort in mastering this course not only opens up rewarding career opportunities but also equips individuals with the skills and expertise needed to excel in the ever-evolving field of technology. Duration of course 5 months.', 10000, 'Ashish Solanki', 'https://tse4.mm.bing.net/th?id=OIP.6YzqVulECP4xwnFQY5GpxQHaHa&pid=Api&P=0&h=220'),
(5, 'Java', 'The Java Programming Language course offers a comprehensive exploration of one of the most widely used and versatile programming languages in the world. Typically spanning from a few weeks to several months, the curriculum covers a broad spectrum of topics, starting from the basics of syntax and control structures to more advanced concepts such as object-oriented programming, data structures, algorithms, and multithreading. Participants engage in hands-on coding exercises, projects, and assignments that reinforce theoretical knowledge and help them develop practical programming skills. Throughout the course, learners gain a deep understanding of Java\'s features, its applications in software development, and its role in building a wide range of applications, from web and mobile to enterprise systems. Enrolling in a Java Programming Language course holds immense value for numerous reasons. Firstly, Java is the backbone of countless software applications and platforms, powering everything from mobile apps to large-scale enterprise systems and web applications. As such, proficiency in Java opens up a plethora of career opportunities in the tech industry, as employers across various sectors actively seek Java developers. Moreover, Java\'s robustness, portability, and scalability make it a preferred choice for developing mission-critical applications, ensuring its relevance and demand in the foreseeable future. Whether aspiring to pursue a career in software development, broaden programming skills, or simply understand the fundamentals of a ubiquitous language, this course provides a solid foundation for success in the dynamic world of technology. By mastering Java, individuals equip themselves with a powerful toolset to innovate, collaborate, and thrive in today\'s digital age, making it a worthwhile investment in their personal and professional development. Duration of course 4 months.', 10000, 'Ashpak Nadaf', 'https://tse2.mm.bing.net/th?id=OIP._Lm_T3scKhVEVFC54gcRxwHaE8&pid=Api&P=0&h=220'),
(2, 'php', 'The PHP Programming Language course provides a comprehensive exploration of web development using PHP, a versatile server-side scripting language. Typically spanning several weeks to a few months, this course covers a wide range of topics essential for building dynamic and interactive websites. Participants learn the fundamentals of PHP syntax, data types, control structures, and functions, as well as how to work with databases using MySQL or other relational database management systems. Additionally, the curriculum often includes advanced concepts such as object-oriented programming, security best practices, and integrating PHP with front-end technologies like HTML, CSS, and JavaScript. Through hands-on projects and practical exercises, students gain valuable experience in developing full-fledged web applications from scratch, honing their skills in problem-solving, debugging, and optimizing code for performance. There are several compelling reasons to undertake a PHP Programming Language course. Firstly, PHP powers a significant portion of the web, making it a highly sought-after skill in the job market. Proficiency in PHP opens up numerous career opportunities, ranging from web development roles in startups to positions at established tech companies. Moreover, PHP\'s flexibility and scalability make it an ideal choice for building a wide variety of web applications, from simple blogs to complex e-commerce platforms. By mastering PHP, individuals gain the ability to create dynamic, data-driven websites that engage users and deliver personalized experiences. Additionally, learning PHP provides a solid foundation for understanding other programming languages and frameworks, further expanding one\'s technical expertise. Ultimately, undertaking a PHP Programming Language course equips individuals with the skills and knowledge needed to excel in the ever-evolving field of web development, empowering them to create impactful digital solutions and contribute to the advancement of the online ecosystem. Duration of course 3 months.', 5000, 'Atish Shriniwar', 'https://tse3.mm.bing.net/th?id=OIP.CmR_xQULrXJrBNo7Q4EUYgHaHa&pid=Api&P=0&h=220'),
(4, 'Python', 'The Python Programming Language course offers a comprehensive exploration of one of the most versatile and widely used programming languages in the world. Typically spanning from a few weeks to a few months, the course covers the fundamentals of Python, including syntax, data structures, object-oriented programming, and file handling. Participants delve into advanced topics such as web development, data analysis, machine learning, and automation, through a combination of lectures, hands-on projects, and coding exercises. The curriculum is designed to accommodate learners of all levels, from beginners with no prior programming experience to seasoned developers looking to expand their skill set. By the end of the course, students emerge with a solid understanding of Python and the ability to build a variety of applications ranging from simple scripts to complex software systems. Enrolling in a Python Programming Language course offers numerous compelling reasons. Firstly, Python\'s simplicity and readability make it an ideal language for beginners to learn programming concepts effectively. Its versatility extends across various domains, including web development, data science, artificial intelligence, and more, making it a valuable skill set in today\'s job market. Moreover, Python\'s extensive library ecosystem and vibrant community support facilitate rapid development and collaboration on projects of all scales. Whether aspiring to pursue a career in software development, enhance analytical skills for data-driven decision-making, or automate repetitive tasks to boost productivity, this course provides the essential foundation and practical experience needed to excel in the ever-evolving field of programming. By mastering Python, individuals equip themselves with a powerful tool to innovate, solve complex problems, and make a meaningful impact in the digital age. Duration of course 6 months. ', 10000, 'Atish Shriniwar', 'https://tse3.mm.bing.net/th?id=OIP.qXUPk8XzmmjD34TLgva0QwHaHa&pid=Api&P=0&h=220'),
(7, 'React', 'The React Programming Language course provides an immersive learning experience focused on mastering the React framework for building interactive user interfaces. Typically spanning several weeks to a few months, this course delves into the core concepts of React, including components, state management, routing, and handling user events. Participants gain hands-on experience through practical projects and assignments, where they learn to leverage React\'s declarative and component-based approach to efficiently create scalable and maintainable web applications. Additionally, the curriculum often covers essential tools and libraries in the React ecosystem, such as Redux for state management and React Router for navigation, equipping students with a comprehensive skill set to tackle real-world development challenges. Embarking on a React Programming Language course offers numerous compelling reasons. Firstly, React has emerged as a leading front-end framework in the industry, widely adopted by companies ranging from startups to tech giants like Facebook and Airbnb. Proficiency in React significantly enhances one\'s employability and career prospects, as businesses actively seek developers with expertise in this technology. Furthermore, React\'s component-based architecture promotes code reusability and modularity, streamlining the development process and enabling teams to build complex applications more efficiently. By mastering React, individuals not only gain a competitive edge in the job market but also empower themselves to create dynamic and responsive user interfaces that deliver exceptional user experiences. Whether aiming to pursue a career in web development, upgrade existing skills, or stay abreast of the latest trends in front-end technology, undertaking this course lays a solid foundation for success in the ever-evolving field of software development. Duration of course 3 months.', 10000, 'Shubangi Chavan', 'https://tse1.mm.bing.net/th?id=OIP.Ic719f-PCoMe0WkukecVSgAAAA&pid=Api&P=0&h=220');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `uname` varchar(80) NOT NULL,
  `cname` varchar(80) NOT NULL,
  `instructor` varchar(90) NOT NULL,
  `msg` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`uname`, `cname`, `instructor`, `msg`) VALUES
('rishu', 'd', 'd', 'd'),
('rishu', 'gf', 'fg', 'fg'),
('rishu', 's', 's', 's'),
('amisha', 'c++', 'shubhangi mam', 'good'),
('amisha', '      ', '      ', '     '),
('rishu', '          ', '        ', '       '),
('rishu', '6', '      ', 'kljkjk'),
('rishu', '3', 'd', 'good'),
('rishu', '3', 'gaurav', 'good'),
('rishu', '3', 'gaurav', 'good'),
('rishu', 'Data', 'gaurav', 'good'),
('Rishabh', 'C++', 'Shubangi chavan', 'good'),
('Amisha', 'Java', 'nadaf sir', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `pass`, `email`, `age`) VALUES
(4, 'rishu', '12345', 'motwanigaurav35@gmail.com', 20),
(101, 'rishabh', '1234', 'rishab@gmail.com', 19),
(102, 'golu', '123', 'golu@gmail.com', 23),
(103, 'rohan', '13221322', 'ronsharma@gmail.com', 18),
(104, 'amisha', '1234', 'chhavisingh7895@gmai', 22),
(105, '1234', 'asd', 'oholsid@gmail.com', 19),
(106, '3', '32', 'preetinjnani1971@gmail.com', 32),
(107, '3', '32', 'preetinjnani1971@gmail.com', 32),
(108, '22', '32', 'injnanidimple@gmail.com', 23),
(109, '22', '32', 'injnanidimple@gmail.com', 23),
(110, '22', '32', 'injnanidimple@gmail.com', 23),
(111, '22', '32', 'injnanidimple@gmail.com', 23),
(112, '22', '32', 'injnanidimple@gmail.com', 23),
(113, '22', '32', 'injnanidimple@gmail.com', 23),
(114, '22', '32', 'injnanidimple@gmail.com', 23),
(115, '22', '32', 'injnanidimple@gmail.com', 23),
(116, '22', '32', 'injnanidimple@gmail.com', 23),
(117, '22', '32', 'injnanidimple@gmail.com', 23),
(118, '22', '32', 'injnanidimple@gmail.com', 23),
(119, 'Preet', '323232', 'injnanidimple@gmail.com', 18),
(120, 'fga', '123456789', 'preetinjnani1971@gmail.com', 18),
(121, 'fga', '123456789', 'preetinjnani1971@gmail.com', 18),
(122, 'fga', '123456789', 'preetinjnani1971@gmail.com', 18),
(123, 'Rishabh', '123456', 'preetinjnani1971@gmail.com', 18),
(124, 'amisha', '123456', 'chhavisingh7895@gmail.com', 22),
(125, 'amisha', '123456', 'chhavisingh@gmail.com', 22);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`announce_id`);

--
-- Indexes for table `ascourse`
--
ALTER TABLE `ascourse`
  ADD KEY `cname` (`cname`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cname`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ascourse`
--
ALTER TABLE `ascourse`
  ADD CONSTRAINT `ascourse_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`),
  ADD CONSTRAINT `ascourse_ibfk_2` FOREIGN KEY (`cname`) REFERENCES `course` (`cname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
