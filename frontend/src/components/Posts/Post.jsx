import { useEffect, useState } from "react";
import axios from "axios";

const Posts = () => {
	const [posts, setPosts] = useState([]);

	useEffect(() => {
		let url = `${import.meta.env.VITE_API_ROOT}/posts`;

		axios
			.get(url)
			.then((response) => {
				setPosts(response.data);
			})
			.catch((error) => {
				console.error("Error fetching posts:", error);
			});
	}, []);

	return (
		<div>
			{posts.map((post) => (
				<div key={post.id}>
					<h2>{post.title.rendered}</h2>
					<div dangerouslySetInnerHTML={{ __html: post.content.rendered }} />
				</div>
			))}
		</div>
	);
};

export default Posts;
