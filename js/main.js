const str =
    "Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.\r\n\r\nProin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium v[...]";

const arr = [
    [1, 1, 2],
    // [2, 1, 3],
    // [3, 2, 4],
    [4, 3, 2],
    // [2, 1, 4],
];

const posts = [
    [1, "java"],
    [2, "wp"],
    [3, "php"],
    [4, "js"],
];
const fitredPost = [];
arr.forEach((item) => {
    posts.forEach((post) => {
        if (item[1] === post[0]) {
            fitredPost.push(post);
        }
    });
});
console.log(fitredPost);
