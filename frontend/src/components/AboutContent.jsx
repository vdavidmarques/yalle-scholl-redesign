import React, { useEffect, useState } from "react";
import apiService from "../services/apiService";

const AboutContent = ({slug}) => {
    const [aboutContent, setAboutContent] = useState(null);

    useEffect(() => {
        apiService.getPageBySlug(slug)
            .then(response => {
                setAboutContent(response.data);
            })
            .catch(error => {
                console.error("Error fetching about content:", error);
            });
    }, [slug]);

    return (
        <>
            {aboutContent?.length > 0 && aboutContent.map((item) => (
                <section className="about-content" key={item.id}>
                    <div dangerouslySetInnerHTML={{ __html: item?.acf?.contentAbout }} />
                    <div dangerouslySetInnerHTML={{ __html: item?.acf?.textImageAbout }} />
                    <img src={item?.acf?.imageAbout?.url} alt={item?.acf?.imageAbout?.alt} />
                </section>
            ))}
        </>
    )
}

export default AboutContent;